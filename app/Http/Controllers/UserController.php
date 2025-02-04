<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $users = User::with('employe')
            ->when($search, function($query) use ($search) {
                return $query->join('employes', 'employes.id', '=', 'users.employe_id')
                             ->where('employes.name', 'like', '%' . $search . '%');
            })
            ->paginate(10);
        $roles = Role::all();
        return view('users.index', compact('users', 'roles', 'search'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:users,email',
            'phone' => 'required|string|max:20',
            'position' => 'nullable|string|max:100',
            'salary' => 'nullable|numeric',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8',
            'role' => 'nullable|exists:roles,id',
        ]);

        $employe = Employe::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'salary' => $request->salary,
        ]);

        $user = User::create([
            'employe_id' => $employe->id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        if ($request->role) {
            $role = Role::findOrFail($request->role);
            $user->assignRole($role->name);
        }

        return redirect()->route('users.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $employe = Employe::findOrFail($user->employe_id);
    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:employes,email,' . $employe->id,
            'phone' => 'required|string|max:20',
            'position' => 'nullable|string|max:100',
            'salary' => 'nullable|numeric',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'password' => 'nullable|string|min:8',
            'role' => 'nullable|exists:roles,id',
        ]);
    
        // Update Employe Data
        $employe->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'salary' => $request->salary,
        ]);
    
        // Update User Data
        $user->update([
            'username' => $request->username,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);
    
        // Update Role (Jika diberikan)
        if ($request->role) {
            $role = Role::findOrFail($request->role);
            $user->syncRoles([$role->name]);
        }
    
        return redirect()->route('users.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Request $request, $id = null)
    {
        if ($request->isMethod('DELETE') && $id === null) {
            // Bulk Delete
            $request->validate([
                'ids' => 'required|array|min:1',
                'ids.*' => 'integer|exists:employes,id',
            ]);
    
            // Menghapus pelanggan berdasarkan ID yang dipilih
            Employe::whereIn('id', $request->ids)->delete();
    
            return redirect()->route('users.index')->with('success', 'Employe deleted successfully.');
        }
    
        if ($id !== null) {
            // Single Delete
            $user = Employe::findOrFail($id);
            $user->delete();
    
            return redirect()->route('users.index')->with('success', 'Employe deleted successfully.');
        }
    }
}
