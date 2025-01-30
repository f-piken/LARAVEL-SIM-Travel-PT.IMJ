<?php

namespace Database\Seeders;

use App\Models\Employe;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat roles
        Role::firstOrCreate(['name' => 'super_admin']);
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'pegawai']);
        Role::firstOrCreate(['name' => 'sopir']);
        
        // Membuat employe
        $employe1 = Employe::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'phone' => '08123456789',
            'position' => 'Super Admin',
            'salary' => 10000.00,
            'profile_photo_path' => 'adminUser.jpg',
        ]);

        $employe2 = Employe::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '08123456780',
            'position' => 'Admin',
            'salary' => 8000.00,
            'profile_photo_path' => 'adminUser.jpg',
        ]);

        $employe3 = Employe::create([
            'name' => 'Pegawai',
            'email' => 'pegawai@gmail.com',
            'phone' => '08123456781',
            'position' => 'Pegawai',
            'salary' => 5000.00,
            'profile_photo_path' => 'karyawanUser.jpg',
        ]);

        // Membuat users
        $super = User::create([
            'employe_id' => $employe1->id,
            'username' => 'superadmin',
            'password' => Hash::make('123456'),
        ]);
        $super->assignRole('super_admin');

        $admin = User::create([
            'employe_id' => $employe2->id,
            'username' => 'admin',
            'password' => Hash::make('123456'),
        ]);
        $admin->assignRole('admin');

        $pegawai = User::create([
            'employe_id' => $employe3->id,
            'username' => 'pegawai',
            'password' => Hash::make('123456'),
        ]);
        $pegawai->assignRole('pegawai');
    }
}
