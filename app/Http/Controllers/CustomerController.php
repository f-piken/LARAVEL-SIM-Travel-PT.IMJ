<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan keyword pencarian dari input form
        $search = $request->input('search');

        $customers = Customer::where('name', 'like', '%' . $search . '%')
                            ->orWhere('phone', 'like', '%' . $search . '%')
                            ->orWhere('address', 'like', '%' . $search . '%')
                            ->paginate(10);

        return view('customers.index', compact('customers','search'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required',
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer added successfully!');
    }

    public function show($id)
    {
        // $customer = Customer::findOrFail($id);
        // return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully!');
    }

    public function destroy(Request $request, $id = null)
    {
        if ($request->isMethod('DELETE') && $id === null) {
            // Bulk Delete
            $request->validate([
                'ids' => 'required|array|min:1',
                'ids.*' => 'integer|exists:customers,id',
            ]);
    
            // Menghapus pelanggan berdasarkan ID yang dipilih
            Customer::whereIn('id', $request->ids)->delete();
    
            return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
        }
    
        if ($id !== null) {
            // Single Delete
            $customer = Customer::findOrFail($id);
            $customer->delete();
    
            return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
        }
    }
}
