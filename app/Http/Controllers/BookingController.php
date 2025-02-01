<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Customer;
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

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dibuat.');
    }
    public function show($id)
    {
        $booking = Booking::with(['customer', 'details', 'vehicle', 'employe'])->findOrFail($id);

        return view('bookings.show', compact('booking'));
    }
    public function updateDeposit(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'deposit' => 'required|numeric|min:0'
        ], [
            'deposit.required' => 'Deposit harus diisi!',
            'deposit.numeric' => 'Deposit harus berupa angka!',
            'deposit.min' => 'Deposit tidak boleh kurang dari 0!'
        ]);

        // Cari booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        $balance = $booking->charge - $request->deposit;
        // Update deposit
        $booking->status = 'deposit';
        $booking->balance = $balance;
        $booking->deposit = $request->deposit;
        $booking->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Deposit berhasil diperbarui!');
    }
    public function downloadPdf($id)
    {
        $booking = Booking::with(['customer', 'details', 'vehicle', 'employe'])->findOrFail($id);

        $path = public_path('images/adminUser.jpg');
        $imageData = base64_encode(file_get_contents($path));
        $imageType = pathinfo($path, PATHINFO_EXTENSION);
        $logoBase64 = "data:image/$imageType;base64,$imageData";

        $pdf = Pdf::loadView('bookings.invoice', compact('booking', 'logoBase64'))
                 ->setPaper('A4', 'portrait'); // Set ukuran kertas

        return $pdf->download('booking_' . $booking->customer->name . '.pdf');
    }
}
