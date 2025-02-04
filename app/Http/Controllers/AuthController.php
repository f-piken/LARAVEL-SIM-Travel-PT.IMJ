<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Attempt login
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();

            // Assign token if using Sanctum/Passport
            $token = $user->createToken('YourAppName')->plainTextToken;

            // Redirect based on role
            if ($user->hasRole('admin')) {
                return redirect('/admin-dashboard')->with('success', 'Welcome Admin!');
            } elseif ($user->hasRole('pegawai')) {
                return redirect('/karyawan-dashboard')->with('success', 'Welcome Karyawan!');
            } else {
                // Fallback if role is not found
                return redirect('/')->with('error', 'No specific role found!');
            }
        }

        return redirect('login')->withErrors(['login' => 'Invalid credentials']);
    }
    public function register()
    {

    }
    public function show()
    {
        return view('profile.show');
    }
    public function update(Request $request)
    {
        $user = Auth::user();
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15|unique:employes,phone,' . $user->employe->id,
            'email' => 'nullable|email|unique:employes,email,' . $user->employe->id,
        ]);

        // Ambil data employe
        $employe = Employe::findOrFail($user->employe->id);

        // Update data employe
        $employe->name = $request->name;
        $employe->phone = $request->phone;
        $employe->email = $request->email;

        // Simpan perubahan
        $employe->save();

        // Redirect dengan pesan sukses
        return redirect()->route('profile.show')->with('success', 'Employee updated successfully!');
    }
    public function updateProfilePhoto(Request $request)
    {
        // Validasi file gambar yang diunggah
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $user = Auth::user();
        $employe = $user->employe;
    
        if ($request->hasFile('profile_photo')) {
            if (!empty($employe->profile_photo_path) && Storage::disk('public')->exists($employe->profile_photo_path)) {
                Storage::disk('public')->delete( $employe->profile_photo_path);
            }
        
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
        
            $employe->profile_photo_path = $path;
            $employe->save();
        }
    
        return back()->with('success', 'Foto profil berhasil diperbarui!');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ], [
            'old_password.required' => 'Password lama wajib diisi.',
            'new_password.required' => 'Password baru wajib diisi.',
            'new_password.min' => 'Password baru minimal 8 karakter.',
            'new_password.confirmed' => 'Konfirmasi password tidak sesuai.',
        ]);
    
        $user = Auth::user();
    
        // Periksa apakah password lama cocok
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->route('profile.show')->withErrors(['old_password' => 'Password lama tidak sesuai.']);
        }
    
        // Update password baru
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        // Logout pengguna untuk memastikan mereka harus login ulang
        Auth::logout();
    
        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Password berhasil diperbarui. Silakan login kembali.');
    }
    
    public function logout()
    {
        Auth::logout(); // Melakukan logout
        return redirect('/login')->with('success', 'You have been logged out!');
    }
}
