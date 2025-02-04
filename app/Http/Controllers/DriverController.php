<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan keyword pencarian dari input form
        $search = $request->input('search');

        $drivers = Driver::where('name', 'like', '%' . $search . '%')
                            ->orWhere('phone', 'like', '%' . $search . '%')
                            ->orWhere('address', 'like', '%' . $search . '%')
                            ->paginate(10);

        return view('drivers.index', compact('drivers','search'));
    }

    public function create()
    {
        return view('drivers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required',
        ]);

        Driver::create($request->all());

        return redirect()->route('drivers.index')->with('success', 'Driver added successfully!');
    }

    public function show($id)
    {
        // $driver = Driver::findOrFail($id);
        // return view('drivers.show', compact('driver'));
    }

    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('drivers.edit', compact('driver'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required',
        ]);

        $driver = Driver::findOrFail($id);
        $driver->update($request->all());

        return redirect()->route('drivers.index')->with('success', 'Driver updated successfully!');
    }

    public function destroy(Request $request, $id = null)
    {
        if ($request->isMethod('DELETE') && $id === null) {
            // Bulk Delete
            $request->validate([
                'ids' => 'required|array|min:1',
                'ids.*' => 'integer|exists:drivers,id',
            ]);
    
            // Menghapus pelanggan berdasarkan ID yang dipilih
            Driver::whereIn('id', $request->ids)->delete();
    
            return redirect()->route('drivers.index')->with('success', 'Driver deleted successfully.');
        }
    
        if ($id !== null) {
            // Single Delete
            $driver = Driver::findOrFail($id);
            $driver->delete();
    
            return redirect()->route('drivers.index')->with('success', 'Driver deleted successfully.');
        }
    }
}
