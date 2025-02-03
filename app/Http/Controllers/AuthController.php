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
    
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        $employe = $user->employe; // Asumsi sudah ada relasi dengan tabel employes
    
        // Cek apakah file gambar ada
        if ($request->hasFile('profile_photo')) {
            // Hapus foto lama jika ada
            if ($employe->profile_photo_path) {
                Storage::delete($employe->profile_photo_path);
            }
        
            // Simpan foto baru dan dapatkan path-nya
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
        
            // Update kolom profile_photo_path di tabel employes
            $employe->profile_photo_path = $path;
            $employe->save();
        }
    
        return back()->with('success', 'Foto profil berhasil diperbarui!');
    }

    public function changePassword(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ], [
            'old_password.required' => 'Password saat ini wajib diisi.',
            'new_password.required' => 'Password baru wajib diisi.',
            'new_password.min' => 'Password baru harus minimal 8 karakter.',
            'new_password.confirmed' => 'Konfirmasi password baru tidak cocok.',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Cek apakah password lama yang dimasukkan benar
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return back()->withErrors(['old_password' => 'Password lama tidak sesuai.']);
        }

        // Update password dengan password baru
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);  // Enkripsi password baru
        $user->save();

        // Beri feedback sukses
        return redirect()->back()->with('success', 'Password berhasil diubah!');
    }
    
    public function logout()
    {
        Auth::logout(); // Melakukan logout
        return redirect('/login')->with('success', 'You have been logged out!');
    }
}
