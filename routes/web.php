<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('komponen.product-landing');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('komponen.index');
    });

    Route::resource('customers',CustomerController::class);
    Route::delete('/customers', [CustomerController::class, 'destroy'])->name('customers.bulkDelete');
    
    Route::resource('vehicles',VehicleController::class);
    Route::delete('/vehicles', [VehicleController::class, 'destroy'])->name('vehicles.bulkDelete');
    
    Route::resource('bookings',BookingController::class);
    Route::delete('/bookings', [BookingController::class, 'destroy'])->name('bookings.bulkDelete');
    Route::post('/booking/{id}/deposit', [BookingController::class, 'updateDeposit'])->name('booking.deposit');
    Route::get('bookings/{id}/download', [BookingController::class, 'downloadPdf'])->name('booking.downloadPdf');
    Route::get('/get-available-vehicles', [BookingController::class, 'getAvailableVehicles']);
    Route::get('/get-vehicle-status', [BookingController::class, 'getVehicleStatus']);

    Route::resource('services',ServiceController::class);
    Route::delete('/services', [ServiceController::class, 'destroy'])->name('services.bulkDelete');
    Route::get('/services-report', [ServiceController::class, 'generateReport'])->name('service.report');
    //taro di sini klo punya admin
});

Route::middleware(['auth','role:karyawan'])->group(function () {
    Route::get('/karyawan-dashboard', function () {
        return view('komponen.index');
    });
    //taro di sini kalo selain admin/karyawan
});
//buat role baru juga boleh

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register.form');
// Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
