@extends('layouts.master')
@section('title')
    {{ __('Vehicle Edit') }}
@endsection
@push('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@section('content')
<!-- page title -->
<x-page-title title="Vehicle Edit" pagetitle="Vehicles" />

<div class="card" id="vehicleList">
    <div class="card-body">
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
            <form id="editVehicleForm" action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit-vehicle-id" value="{{ $vehicle->id }}">
            
                <h2 class="text-lg font-bold mb-4">Edit Vehicle Information</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="edit-name" class="block font-medium">Vehicle Name <span class="text-red-500">*</span></label>
                        <input type="text" id="edit-name" name="name" value="{{ $vehicle->name }}" required class="form-input w-full border-slate-200">
                    </div>
                    <div>
                        <label for="edit-type" class="block font-medium">Vehicle Type <span class="text-red-500">*</span></label>
                        <input type="text" id="edit-type" name="type" value="{{ $vehicle->type }}" required class="form-input w-full border-slate-200">
                    </div>
                    <div>
                        <label for="edit-license_plate" class="block font-medium">License Plate <span class="text-red-500">*</span></label>
                        <input type="text" id="edit-license_plate" name="license_plate" value="{{ $vehicle->license_plate }}" required class="form-input w-full border-slate-200">
                    </div>
                    <div>
                        <label for="edit-capacity" class="block font-medium">Capacity <span class="text-red-500">*</span></label>
                        <input type="number" id="edit-capacity" name="capacity" value="{{ $vehicle->capacity }}" required class="form-input w-full border-slate-200">
                    </div>
                    <div class="mb-3">
                        <label for="edit-rentalprice-field" class="inline-block mb-2 text-base font-medium">Rental Price per Day
                            <span class="text-red-500">*</span></label>
                        <input type="number" step="0.01" id="edit-rentalprice-field" name="rental_price_per_day" value="{{ $vehicle->rental_price_per_day }}"
                               class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                               placeholder="Enter rental price per day" required>
                    </div>
                    <div>
                        <label for="edit-is_available" class="block font-medium">Availability</label>
                        <select id="edit-is_available" name="is_available" class="form-input w-full border-slate-200">
                            <option value="1" {{ $vehicle->is_available ? 'selected' : '' }}>Available</option>
                            <option value="0" {{ !$vehicle->is_available ? 'selected' : '' }}>Not Available</option>
                        </select>
                    </div>
                </div>
                
                <h2 class="text-lg font-bold mt-6 mb-4">Vehicle Details</h2>
                
                <h3 class="text-lg mt-4 mb-2">Surat - Surat</h3>
                <div class="grid grid-cols-3 gap-4">
                    @foreach(['stnk', 'buku_kir', 'kartu_tap_oli'] as $detail)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="{{ $detail }}" value="1" class="form-checkbox" {{ isset($vehicle->details->$detail) && $vehicle->details->$detail == 1 ? 'checked' : '' }}>
                            <span class="ml-2 capitalize">{{ str_replace('_', ' ', $detail) }}</span>
                        </label>
                    @endforeach
                </div>
                
                <h3 class="text-lg mt-4 mb-2">Peralatan Mobil</h3>
                <div class="grid grid-cols-3 gap-4">
                    @foreach(['dongkrak', 'ban_serep', 'kunci_roda'] as $detail)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="{{ $detail }}" value="1" class="form-checkbox" {{ isset($vehicle->details->$detail) && $vehicle->details->$detail == 1 ? 'checked' : '' }}>
                            <span class="ml-2 capitalize">{{ str_replace('_', ' ', $detail) }}</span>
                        </label>
                    @endforeach
                </div>
                
                <h3 class="text-lg mt-4 mb-2">BBM</h3>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="bbm_full" value="1" class="form-checkbox" {{ isset($vehicle->details->bbm_full) && $vehicle->details->bbm_full == 1 ? 'checked' : '' }}>
                        <span class="ml-2">Full</span>
                    </label>
                </div>
                
                <h3 class="text-lg mt-4 mb-2">Kelistrikan</h3>
                <div class="grid grid-cols-3 gap-4">
                    @foreach(['lampu_utama', 'lampu_belakang', 'lampu_sein', 'lampu_dalam', 'lcd', 'ac'] as $detail)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="{{ $detail }}" value="1" class="form-checkbox" {{ isset($vehicle->details->$detail) && $vehicle->details->$detail == 1 ? 'checked' : '' }}>
                            <span class="ml-2 capitalize">{{ str_replace('_', ' ', $detail) }}</span>
                        </label>
                    @endforeach
                </div>
                
                <div class="flex justify-end gap-2 mt-6">
                    <a href="{{ route('vehicles.index') }}" data-modal-close="editVehicleModal"
                       class="text-white btn bg-slate-500 border-slate-500 hover:bg-slate-600">Cancel</a>
                    <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">
                            <i data-lucide="save" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                            <span class="align-middle">Save Change</span></button>
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
