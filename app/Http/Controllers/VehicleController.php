<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleDetail;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan keyword pencarian dari input form
        $search = $request->input('search');

        $vehicles = Vehicle::where('name', 'like', '%' . $search . '%')
                            ->orWhere('type', 'like', '%' . $search . '%')
                            ->orWhere('license_plate', 'like', '%' . $search . '%')
                            ->orWhere('capacity', 'like', '%' . $search . '%')
                            ->orWhere('capacity', 'like', '%' . $search . '%')
                            ->orWhere('rental_price_per_day', 'like', '%' . $search . '%')
                            ->orWhere('is_available', 'like', '%' . $search . '%')
                            ->paginate(10);

        return view('vehicles.index', compact('vehicles','search'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'license_plate' => 'required|string|max:255|unique:vehicles',
            'capacity' => 'required|integer|min:1',
            'rental_price_per_day' => 'required|numeric|min:0',
            'is_available' => 'boolean',
        ]);

        $vehicle = Vehicle::create($request->only(['name', 'type', 'license_plate', 'capacity', 'rental_price_per_day', 'is_available']));

        VehicleDetail::create(array_merge($request->only([
            'stnk', 'buku_kir', 'kartu_tap_oli', 'dongkrak', 'ban_serep', 'kunci_roda',
            'bbm_full', 'lampu_utama', 'lampu_belakang', 'lampu_sein', 'lampu_dalam', 'lcd', 'ac'
        ]), ['vehicle_id' => $vehicle->id]));

        return redirect()->route('vehicles.index')->with('success', 'Vehicle added successfully!');
    }

    public function show($id)
    {
        $vehicle = Vehicle::with('details')->findOrFail($id);
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit($id)
    {
        $vehicle = Vehicle::with('details')->findOrFail($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'type' => 'sometimes|string|max:255',
            'license_plate' => 'sometimes|string|max:255|unique:vehicles,license_plate,' . $id,
            'capacity' => 'sometimes|integer|min:1',
            'rental_price_per_day' => 'sometimes|numeric|min:0',
            'is_available' => 'boolean',
        ]);
        
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->only(['name', 'type', 'license_plate', 'capacity', 'rental_price_per_day', 'is_available']));

        $vehicle->details()->update($request->only([
            'stnk', 'buku_kir', 'kartu_tap_oli', 'dongkrak', 'ban_serep', 'kunci_roda',
            'bbm_full', 'lampu_utama', 'lampu_belakang', 'lampu_sein', 'lampu_dalam', 'lcd', 'ac'
        ]));

        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully!');
    }

    public function destroy(Request $request, $id = null)
    {
        if ($request->isMethod('DELETE') && $id === null) {
            // Bulk Delete
            $request->validate([
                'ids' => 'required|array|min:1',
                'ids.*' => 'integer|exists:vehicles,id',
            ]);
    
            Vehicle::whereIn('id', $request->ids)->delete();
    
            return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
        }
    
        if ($id !== null) {
            // Single Delete
            $vehicle = Vehicle::findOrFail($id);
            $vehicle->delete();
    
            return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
        }
    }
}
