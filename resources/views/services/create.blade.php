@extends('layouts.master')
@section('title', __('Create Service Entry'))

@push('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')

<x-page-title title="Create Service Entry" pagetitle="Service Data" />

<div class="card">
    <div class="card-body">
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-2">
                <h2 class="text-lg font-bold mb-4">Service Information</h2>

                <div class="ltr:md:text-end rtl:md:text-start">
                    <a href="{{ route('services.index') }}" class="text-white bg-purple-500 border-purple-500 btn hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100">
                        <i data-lucide="list" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                        <span class="align-middle">Service Data</span>
                    </a>
                </div>
            </div>

            <!-- Vehicle Selection -->
            <div class="grid grid-cols-1 gap-4 mb-5">
                <div>
                    <label for="vehicle_id" class="block font-medium">Vehicle <span class="text-red-500">*</span></label>
                    <select id="vehicle_id" name="vehicle_id" required class="form-input w-full border-slate-200">
                        <option value="">Select Vehicle</option>
                        @foreach($vehicles as $vehicle)
                            <option value="{{ $vehicle->id }}" {{ old('vehicle_id') == $vehicle->id ? 'selected' : '' }}>
                                {{ $vehicle->name }} - {{ $vehicle->license_plate }}
                            </option>
                        @endforeach
                    </select>
                    @error('vehicle_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="total" class="block font-medium">Total Cost <span class="text-red-500">*</span></label>
                    <input type="number" step="0.01" id="total" name="total" value="{{ old('total') }}" required class="form-input w-full border-slate-200">
                    @error('total') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>

            <h2 class="text-lg font-bold mt-6">Service Details</h2>

            <!-- Service Details -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="tanggal_service" class="block font-medium">Service Date <span class="text-red-500">*</span></label>
                    <input type="date" id="tanggal_service" name="tanggal_service" value="{{ old('tanggal_service') }}" required class="form-input w-full border-slate-200">
                    @error('tanggal_service') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="keterangan" class="block font-medium">Description</label>
                    <textarea id="keterangan" name="keterangan" class="form-input w-full border-slate-200">{{ old('keterangan') }}</textarea>
                    @error('keterangan') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="jumlah" class="block font-medium">Amount <span class="text-red-500">*</span></label>
                    <input type="number" step="0.01" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" required class="form-input w-full border-slate-200">
                    @error('jumlah') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>

            <!-- Save Button -->
            <div class="flex justify-end gap-2 mt-6">
                <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">
                    <i data-lucide="save" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                    <span class="align-middle">Save</span>
                </button>
            </div>

        </form>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/listjs.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
