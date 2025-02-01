@extends('layouts.master')
@section('title', __('Rental Contract & Invoice'))
@push('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@section('content')

<x-page-title title="Rental Contract & Invoice" pagetitle="Bookings" />

<div class="card" id="vehicleBooking">
    <div class="card-body">
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
            <form id="bookVehicleForm" action="{{ route('bookings.store') }}" method="POST">
                @csrf
                
                <h2 class="text-lg font-bold mb-4">Booking Information</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="customer_id" class="block font-medium">Customer Name <span class="text-red-500">*</span></label>
                        <select id="customer_id" name="customer_id" required class="form-input w-full border-slate-200">
                            <option value="">Pilih Customer</option>
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                    {{ $customer->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('customer_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    
                    <div>
                        <label for="vehicle_id" class="block font-medium">Vehicle Type / Nopol <span class="text-red-500">*</span></label>
                        <select id="vehicle_id" name="vehicle_id" required class="form-input w-full border-slate-200">
                            <option value="">Pilih Kendaraan</option>
                            @foreach($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}" {{ old('vehicle_id') == $vehicle->id ? 'selected' : '' }}>
                                    {{ $vehicle->name }} - {{ $vehicle->license_plate }}
                                </option>
                            @endforeach
                        </select>
                        @error('vehicle_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    
                    <div>
                        <label for="destination" class="block font-medium">Destination <span class="text-red-500">*</span></label>
                        <input type="text" id="destination" name="destination" value="{{ old('destination') }}" required class="form-input w-full border-slate-200">
                        @error('destination') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                </div>
                <h2 class="text-lg font-bold mt-4">Waktu</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="start_date" class="block font-medium">Date Out <span class="text-red-500">*</span></label>
                        <input type="datetime-local" id="start_date" name="start_date" value="{{ old('start_date') }}" required class="form-input w-full border-slate-200">
                        @error('start_date') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    
                    <div>
                        <label for="end_date" class="block font-medium">Date In <span class="text-red-500">*</span></label>
                        <input type="datetime-local" id="end_date" name="end_date" value="{{ old('end_date') }}" required class="form-input w-full border-slate-200">
                        @error('end_date') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                </div>
                <h2 class="text-lg font-bold mt-6">Vehicle Condition</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="deskripsi_sebelum" class="block font-medium">Condition Before Rental</label>
                        <textarea id="deskripsi_sebelum" name="deskripsi_sebelum" class="form-input w-full border-slate-200">{{ old('deskripsi_sebelum') }}</textarea>
                    </div>

                    <div>
                        <label for="deskripsi_sesudah" class="block font-medium">Condition After Rental</label>
                        <textarea id="deskripsi_sesudah" name="deskripsi_sesudah" class="form-input w-full border-slate-200">{{ old('deskripsi_sesudah') }}</textarea>
                    </div>
                </div>

                <div class="flex justify-end gap-2 mt-6">
                    <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Book Vehicle</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/listjs.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
