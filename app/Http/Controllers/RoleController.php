<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search'); // Mendapatkan parameter pencarian

        // Mendapatkan roles yang guard_name-nya "web" dan jika ada pencarian
        $roles = Role::where('guard_name', 'web')
            ->when($search, function($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate(10); // Menampilkan 10 per halaman

        return view('roles.index', compact('roles', 'search'));
    }

    // Menampilkan form untuk menambah role baru
    public function create()
    {
        return view('roles.create');
    }

    // Menyimpan role baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
        ]);

        Role::create([
            'name' => $request->name,
            'guard_name' => 'web',
        ]);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    // Menyimpan perubahan pada role
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $id,
        ]);

        $role = Role::findOrFail($id);
        $role->update([
            'name' => $request->name,
            'guard_name' => 'web',
        ]);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    public function destroy(Request $request, $id = null)
    {
        if ($request->isMethod('DELETE') && $id === null) {
            // Bulk Delete
            $request->validate([
                'ids' => 'required|array|min:1',
                'ids.*' => 'integer|exists:roles,id',
            ]);
    
            // Menghapus pelanggan berdasarkan ID yang dipilih
            Role::whereIn('id', $request->ids)->delete();
    
            return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
        }
    
        if ($id !== null) {
            // Single Delete
            $role = Role::findOrFail($id);
            $role->delete();
    
            return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
        }
    }
}
