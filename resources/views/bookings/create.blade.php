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
                <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-2">
                    <h2 class="text-lg font-bold mb-4">Booking Information</h2>
                    <div class="ltr:md:text-end rtl:md:text-start">
                        <a href="{{ route('bookings.index') }}" class="text-white bg-purple-500 border-purple-500 btn hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100">
                            <i data-lucide="book" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                            <span class="align-middle">Booking Data</span>
                        </a>
                    </div>
                </div>
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
                        <div class="flex items-center gap-4">
                            <div class="flex-1">
                                <select id="vehicle_id" name="vehicle_id" required class="form-input w-full border-slate-200">
                                    <option value="">Pilih Kendaraan</option>
                                </select>
                                @error('vehicle_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                            </div>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#showModal" data-modal-target="showModal"
                                class="text-white btn bg-purple-500 border-purple-500 hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100 add-btn">
                                <i data-lucide="car" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                            </button>                       
                        </div>
                    </div>
                    
                    <div>
                        <label for="destination" class="block font-medium">Destination <span class="text-red-500">*</span></label>
                        <input type="text" id="destination" name="destination" value="{{ old('destination') }}" required class="form-input w-full border-slate-200">
                        @error('destination') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
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
                    <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">
                        <i data-lucide="save" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                        <span class="align-middle">Save</span>
                    </button>
                </div>
            </form>            
        </div>
    </div>
</div>
@include('bookings.vehicle-modal')
@endsection

@push('scripts')
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/listjs.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.querySelector('[data-modal-close="showModal"]').addEventListener('click', () => {
            document.getElementById('showModal').classList.add('hidden');
            document.getElementById('showModal').classList.remove('show');
        });

        $(document).ready(function () {
            $('#start_date, #end_date').on('change', function () {
                let startDate = $('#start_date').val();
                let endDate = $('#end_date').val();
            
                if (startDate && endDate) {
                    $.ajax({
                        url: '/get-available-vehicles',
                        type: 'GET',
                        data: {
                            start_date: startDate,
                            end_date: endDate
                        },
                        success: function (response) {
                            let vehicleSelect = $('#vehicle_id');
                            vehicleSelect.empty(); // Kosongkan dropdown
                        
                            if (response.length > 0) {
                                vehicleSelect.append('<option value="">-- Pilih Kendaraan --</option>');
                                $.each(response, function (index, vehicle) {
                                    vehicleSelect.append('<option value="' + vehicle.id + '">' + vehicle.name + ' - ' + vehicle.license_plate + '</option>');
                                });
                            } else {
                                vehicleSelect.append('<option value="">Tidak ada kendaraan tersedia</option>');
                            }
                        },
                        error: function () {
                            alert('Terjadi kesalahan, coba lagi.');
                        }
                    });
                }
            });
        });
        $(document).ready(function () {
        // Fetch available vehicles when start_date or end_date changes
        $('#start_date, #end_date').on('change', function () {
            let startDate = $('#start_date').val();
            let endDate = $('#end_date').val();
        
            if (startDate && endDate) {
                // Fetch available vehicles for selected dates
                $.ajax({
                    url: '/get-available-vehicles',
                    type: 'GET',
                    data: {
                        start_date: startDate,
                        end_date: endDate
                    },
                    success: function (response) {
                        let vehicleSelect = $('#vehicle_id');
                        vehicleSelect.empty(); // Clear dropdown
                    
                        if (response.length > 0) {
                            vehicleSelect.append('<option value="">-- Pilih Kendaraan --</option>');
                            $.each(response, function (index, vehicle) {
                                vehicleSelect.append('<option value="' + vehicle.id + '">' + vehicle.name + ' - ' + vehicle.license_plate + '</option>');
                            });
                        } else {
                            vehicleSelect.append('<option value="">Tidak ada kendaraan tersedia</option>');
                        }
                    },
                    error: function () {
                        alert('Terjadi kesalahan, coba lagi.');
                    }
                });
            
                // Fetch vehicle status for the modal
                $.ajax({
                    url: '/get-vehicle-status',
                    type: 'GET',
                    data: {
                        start_date: startDate,
                        end_date: endDate
                    },
                    success: function (response) {
                        let vehicleList = $('#vehicleList');
                        vehicleList.empty(); // Clear previous list
                    
                        if (response.length > 0) {
                            $.each(response, function (index, vehicle) {
                                let status = vehicle.booking ? 'Scheduled' : 'Not Scheduled';
                                let row = `<tr>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200">${vehicle.name} - ${vehicle.license_plate}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200">${vehicle.type}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200">${vehicle.capacity}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200">${vehicle.price}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200">${status}</td>
                                        </tr>`;
                                vehicleList.append(row);
                            });
                        } else {
                            vehicleList.append('<tr><td colspan="3">No vehicles found for the selected dates.</td></tr>');
                        }
                    },
                    error: function () {
                        alert('Error occurred while fetching data.');
                    }
                });
            }
        });
    });
    </script>
@endpush
