<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Vehicle;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $month = $request->input('month');
        $year = $request->input('year');

        // Query utama dengan filter pencarian dan filter bulan & tahun
        $services = Service::with(['vehicle', 'details'])
            ->when($search, function ($query, $search) {
                return $query->where('total', 'like', "%$search%")
                    ->orWhereHas('vehicle', function ($query) use ($search) {
                        $query->where('name', 'like', "%$search%")
                            ->orWhere('license_plate', 'like', "%$search%");
                    });
            })
            ->when($month && $year, function ($query) use ($month, $year) {
                return $query->whereHas('details', function ($query) use ($month, $year) {
                    $query->whereMonth('tanggal_service', $month)
                          ->whereYear('tanggal_service', $year);
                });
            })
            ->paginate(10);

        // Mengambil daftar bulan & tahun yang tersedia di service_details
        $months = ServiceDetail::selectRaw('DISTINCT MONTH(tanggal_service) as month')
            ->orderBy('month')
            ->pluck('month');

        $years = ServiceDetail::selectRaw('DISTINCT YEAR(tanggal_service) as year')
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('services.index', compact('services', 'search', 'month', 'year', 'months', 'years'));
    }

    public function create()
    {
        // Retrieve all vehicles and bookings for the form's dropdowns
        $vehicles = Vehicle::all();
        $bookings = Booking::all();

        return view('services.create', compact('vehicles', 'bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'total' => 'required|numeric',
            'tanggal_service' => 'required|date',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string'
        ]);

        DB::beginTransaction();

        try {
            $service = Service::create([
                'vehicle_id' => $request->vehicle_id,
                'total' => $request->total,
            ]);

            $serviceDetail = ServiceDetail::create([
                'service_id' => $service->id,
                'tanggal_service' => $request->tanggal_service,
                'keterangan' => $request->keterangan,
                'jumlah' => $request->jumlah,
                'debet' => 0,
                'kredit' => $request->total ?? 0,
            ]);

            DB::commit();

            return redirect()->route('services.index')->with('success', 'Service and details saved successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('services.create')
                             ->with('error', 'Failed to save the service and details. Error: ' . $e->getMessage())
                             ->withInput();
        }
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $vehicles = Vehicle::all();
        return view('services.edit', compact('service', 'vehicles'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'total' => 'required|numeric|min:0',
            'tanggal_service' => 'required|date',
            'jumlah' => 'required|numeric|min:0',
        ]);

        // Ambil data service
        $service = Service::findOrFail($id);
        $service->vehicle_id = $request->vehicle_id;
        $service->total = $request->total;
        $service->save();

        // Ambil data service details
        $serviceDetail = ServiceDetail::where('service_id', $service->id)->first();
        $serviceDetail->tanggal_service = $request->tanggal_service;
        $serviceDetail->keterangan = $request->keterangan;
        $serviceDetail->jumlah = $request->jumlah;
        $serviceDetail->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Request $request, $id = null)
    {
        if ($request->isMethod('DELETE') && $id === null) {
            // Bulk Delete
            $request->validate([
                'ids' => 'required|array|min:1',
                'ids.*' => 'integer|exists:services,id',
            ]);
    
            Service::whereIn('id', $request->ids)->delete();
    
            return redirect()->route('services.index')->with('success', 'Service data deleted successfully.');
        }
    
        if ($id !== null) {
            // Single Delete
            $vehicle = Service::findOrFail($id);
            $vehicle->delete();
    
            return redirect()->route('services.index')->with('success', 'Service data deleted successfully.');
        }
    }
    public function generateReport(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');

        // Validasi input
        $request->validate([
            'month' => 'required|numeric|min:1|max:12',
            'year' => 'required|numeric|min:2020|max:' . date('Y'),
        ]);

        $reports = ServiceDetail::whereMonth('tanggal_service', $month)
                                ->whereYear('tanggal_service', $year)
                                ->get();

        $totalDebet = $reports->sum('debet');
        $totalKredit = $reports->sum('kredit');
        $totalPendapatan = $totalDebet - $totalKredit;

        $monthName = date('F', mktime(0, 0, 0, $month, 10));

        $pdf = Pdf::loadView('services.report', compact('reports', 'monthName', 'year', 'totalDebet', 'totalKredit', 'totalPendapatan'));

        return $pdf->download('report_' . $monthName . '_' . $year . '.pdf');
    }

}
