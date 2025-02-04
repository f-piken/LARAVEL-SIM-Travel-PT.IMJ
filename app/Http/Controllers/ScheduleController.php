<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');  // Get search term from the request
        $schedules = Schedule::with('driver', 'booking')
            ->whereHas('driver', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->orWhereHas('booking', function ($query) use ($search) {
                $query->where('destination', 'like', '%' . $search . '%');
            })
            ->paginate(10);

        $drivers = Driver::All();
        return view('schedules.index', compact('schedules','drivers', 'search'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'driver_id' => 'nullable|exists:drivers,id',
            'honor' => 'nullable|numeric',
            'status' => 'required|in:on going,in progress,done,cancel',
        ]);

        $schedule = Schedule::findOrFail($id);
        $schedule->update([
            'driver_id' => $request->driver_id,
            'honor' => $request->honor,
            'status' => $request->status,
        ]);

        return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully');
    }

    public function destroy(Request $request, $id = null)
    {
        if ($request->isMethod('DELETE') && $id === null) {
            // Bulk Delete
            $request->validate([
                'ids' => 'required|array|min:1',
                'ids.*' => 'integer|exists:schedules,id',
            ]);
    
            // Menghapus pelanggan berdasarkan ID yang dipilih
            Schedule::whereIn('id', $request->ids)->delete();
    
            return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully.');
        }
    
        if ($id !== null) {
            // Single Delete
            $customer = Schedule::findOrFail($id);
            $customer->delete();
    
            return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully.');
        }
    }
}
