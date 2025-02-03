<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRevenue = ServiceDetail::sum(DB::raw('debet - kredit'));

        $totalBookings = Booking::count();

        $totalVehicles = Vehicle::count();

        $totalCancelledBookings = Booking::where('status', 'cancelled')->count();

        $monthlyData = DB::table('service_details')
            ->selectRaw('MONTH(tanggal_service) as month, YEAR(tanggal_service) as year, 
                        SUM(kredit) as total_kredit, SUM(debet) as total_debet')
            ->groupBy(DB::raw('MONTH(tanggal_service), YEAR(tanggal_service)'))
            ->orderBy(DB::raw('YEAR(tanggal_service), MONTH(tanggal_service)'))
            ->get();

        $totalKredit = DB::table('service_details')->sum('kredit');
        $totalDebet = DB::table('service_details')->sum('debet');
        $services = Service::with('details')->paginate(10);

        return view('index', compact(
            'totalRevenue',
            'totalBookings',
            'totalVehicles',
            'totalCancelledBookings',
            'monthlyData',
            'totalKredit',
            'totalDebet',
            'services'
        ));
    }

    public function getSalesProfit(Request $request)
    {
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');

        // Ambil data berdasarkan rentang tanggal
        $monthlyData = DB::table('service_details')
            ->selectRaw('MONTH(tanggal_service) as month, YEAR(tanggal_service) as year, 
                        SUM(kredit) as total_kredit, SUM(debet) as total_debet')
            ->whereBetween('tanggal_service', [$startDate, $endDate])
            ->groupBy(DB::raw('MONTH(tanggal_service), YEAR(tanggal_service)'))
            ->orderBy(DB::raw('YEAR(tanggal_service), MONTH(tanggal_service)'))
            ->get();

        // Persiapkan data untuk dikirim ke frontend
        $months = [];
        $totalSales = [];
        $totalProfit = [];

        foreach ($monthlyData as $data) {
            $months[] = $data->month . '-' . $data->year;
            $totalSales[] = $data->total_kredit;
            $totalProfit[] = $data->total_debet;
        }

        return response()->json([
            'months' => $months,
            'totalSalesData' => $totalSales,
            'totalProfitData' => $totalProfit,
            'totalSales' => array_sum($totalSales) / 1000,  // dalam ribuan
            'totalProfit' => array_sum($totalProfit) / 1000,  // dalam ribuan
        ]);
    }
    public function getOrderStatistics()
    {
        $data = Booking::selectRaw("MONTH(created_at) as month, status, COUNT(*) as count")
            ->groupBy('month', 'status')
            ->orderBy('month')
            ->get();

        $formattedData = [];

        foreach ($data as $row) {
            $formattedData[$row->status][$row->month] = $row->count;
        }

        return response()->json($formattedData);
    }
}
