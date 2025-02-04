<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Customer;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Vehicle;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $bookings = Booking::with(['customer', 'vehicle'])
            ->when($search, function ($query, $search) {
                return $query->whereHas('customer', function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%");
                })->orWhereHas('vehicle', function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%");
                })->orWhere('start_date', 'like', "%$search%")
                ->orWhere('charge', 'like', "%$search%");
            })
            ->orderBy('start_date', 'desc')
            ->paginate(10);
        
        return view('bookings.index', compact('bookings', 'search'));
    }

    public function create()
    {
        $customers = Customer::all();
        $vehicles = Vehicle::with('details')->where('is_available', true)->get();

        return view('bookings.create', compact('customers', 'vehicles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'vehicle_id' => 'required|exists:vehicles,id',
            'destination' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'description' => 'nullable|string',
            'deskripsi_sebelum' => 'nullable|string',
            'deskripsi_sesudah' => 'nullable|string',
        ]);
    
        $user = Auth::user();
        if (!$user->employe) {
            return redirect()->back()->withErrors(['error' => 'User tidak memiliki data employe.']);
        }

        $vehicle = Vehicle::findOrFail($request->vehicle_id);

        $start = Carbon::parse($request->start_date);
        $end = Carbon::parse($request->end_date);
        $diffInHours = $start->diffInHours($end);
        $duration = $diffInHours / 24;

        $charge = $vehicle->rental_price_per_day * $duration;

        $booking = Booking::create([
            'customer_id' => $request->customer_id,
            'vehicle_id' => $request->vehicle_id,
            'employe_id' => $user->employe->id,
            'destination' => $request->destination,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'deposit' => 0,
            'balance' => $charge,
            'charge' => $charge,
            'description' => $request->description,
            'status' => 'pending'
        ]);

        BookingDetail::create([
            'vehicle_id' => $request->vehicle_id,
            'booking_id' => $booking->id,
            'deskripsi_sebelum' => $request->deskripsi_sebelum,
            'deskripsi_sesudah' => $request->deskripsi_sesudah,
        ]);
        Schedule::create([
            'booking_id' => $booking->id,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dibuat.');
    }
    public function show($id)
    {
        $booking = Booking::with(['customer', 'details', 'vehicle', 'employe'])->findOrFail($id);
        $start = Carbon::parse($booking->start_date);
        $end = Carbon::parse($booking->end_date);
    
        // Hitung perbedaan dalam jam
        $diffInHours = $start->diffInHours($end);
        
        // Hitung durasi dalam hari dan sisa jam
        $durationInDays = floor($diffInHours / 24);
        $remainingHours = $diffInHours % 24;
    
        // Kirimkan data hari dan jam ke view
        return view('bookings.show', compact('booking', 'durationInDays', 'remainingHours'));
    }
    public function edit($id)
    {
        $booking = Booking::with('details')->findOrFail($id);
        $customers = Customer::all();
        $vehicles = Vehicle::with('details')->where('is_available', true)->get();

        return view('bookings.edit', compact('booking', 'customers', 'vehicles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'vehicle_id' => 'required|exists:vehicles,id',
            'destination' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'description' => 'nullable|string',
            'deskripsi_sebelum' => 'nullable|string',
            'deskripsi_sesudah' => 'nullable|string',
        ]);

        $booking = Booking::findOrFail($id);
        $vehicle = Vehicle::findOrFail($request->vehicle_id);

        $start = Carbon::parse($request->start_date);
        $end = Carbon::parse($request->end_date);
        $diffInHours = $start->diffInHours($end);
        $duration = $diffInHours / 24;

        $charge = $vehicle->rental_price_per_day * $duration;

        // Update the booking
        $booking->update([
            'customer_id' => $request->customer_id,
            'vehicle_id' => $request->vehicle_id,
            'destination' => $request->destination,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'balance' => $charge,
            'charge' => $charge,
            'description' => $request->description,
            'status' => 'pending', // or you can maintain the status if it's not supposed to change
        ]);

        // Update the booking details
        $bookingDetail = $booking->details; // assuming the relation exists
        $bookingDetail->update([
            'vehicle_id' => $request->vehicle_id,
            'deskripsi_sebelum' => $request->deskripsi_sebelum,
            'deskripsi_sesudah' => $request->deskripsi_sesudah,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil diperbarui.');
    }

    public function getAvailableVehicles(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        // Ambil kendaraan yang tidak sedang dibooking pada rentang waktu yang diberikan
        $bookedVehicleIds = Booking::where(function ($query) use ($startDate, $endDate) {
            $query->whereBetween('start_date', [$startDate, $endDate])
                  ->orWhereBetween('end_date', [$startDate, $endDate])
                  ->orWhere(function ($q) use ($startDate, $endDate) {
                      $q->where('start_date', '<=', $startDate)
                        ->where('end_date', '>=', $endDate);
                  });
        })->pluck('vehicle_id');

        $availableVehicles = Vehicle::whereNotIn('id', $bookedVehicleIds)->get();

        return response()->json($availableVehicles);
    }
    public function getVehicleStatus(Request $request)
    {
        // Validate the date range
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Get all vehicles and their booking status
        $vehicles = Vehicle::with(['bookings' => function($query) use ($request) {
            $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                  ->orWhereBetween('end_date', [$request->start_date, $request->end_date]);
        }])->get();

        // Prepare the data to return
        $vehicleStatus = $vehicles->map(function ($vehicle) {
            return [
                'id' => $vehicle->id,
                'name' => $vehicle->name,
                'license_plate' => $vehicle->license_plate,
                'type' => $vehicle->type,
                'capacity' => $vehicle->capacity,
                'price' => $vehicle->rental_price_per_day,
                'booking' => $vehicle->bookings->isNotEmpty(), // Check if there's a booking within the date range
            ];
        });

        return response()->json($vehicleStatus);
    }

    public function updateDeposit(Request $request, $id)
    {
        $request->validate([
            'deposit' => 'required|numeric|min:0'
        ], [
            'deposit.required' => 'Deposit harus diisi!',
            'deposit.numeric' => 'Deposit harus berupa angka!',
            'deposit.min' => 'Deposit tidak boleh kurang dari 0!'
        ]);

        $booking = Booking::findOrFail($id);

        $balance = $booking->charge - $request->deposit;

        $booking->status = 'deposit';
        $booking->balance = $balance;
        $booking->deposit = $request->deposit;
        $booking->save();

        $service = Service::create([
            'vehicle_id' => $booking->vehicle_id,
            'total' => $booking->deposit,
        ]);

        $tanggalService = $booking->updated_at->format('Y-m-d');

        ServiceDetail::create([
            'service_id' => $service->id,
            'booking_id' => $booking->id,
            'tanggal_service' => $tanggalService,
            'jumlah' => $request->deposit,
            'debet' => $booking->deposit,
            'kredit' => 0,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Deposit berhasil diperbarui!');
    }

    public function destroy(Request $request, $id = null)
    {
        if ($request->isMethod('DELETE') && $id === null) {
            // Bulk Delete
            $request->validate([
                'ids' => 'required|array|min:1',
                'ids.*' => 'integer|exists:bookings,id',
            ]);
    
            Booking::whereIn('id', $request->ids)->delete();
    
            return redirect()->route('bookings.index')->with('success', 'Booking data deleted successfully.');
        }
    
        if ($id !== null) {
            // Single Delete
            $vehicle = Booking::findOrFail($id);
            $vehicle->delete();
    
            return redirect()->route('bookings.index')->with('success', 'Booking data deleted successfully.');
        }
    }
    public function downloadPdf($id)
    {
        $booking = Booking::with(['customer', 'details', 'vehicle', 'employe'])->findOrFail($id);

        $path = public_path('images/logo.png');
        $imageData = base64_encode(file_get_contents($path));
        $imageType = pathinfo($path, PATHINFO_EXTENSION);
        $logoBase64 = "data:image/$imageType;base64,$imageData";

        $pdf = Pdf::loadView('bookings.invoice', compact('booking', 'logoBase64'))
                 ->setPaper('F4', 'portrait');

        return $pdf->download('booking_' . $booking->customer->name . '.pdf');
    }
}
