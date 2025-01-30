@extends('layouts.master')
@section('title')
    {{ __('Customer Edit') }}
@endsection
@push('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@section('content')
<!-- page title -->
    <x-page-title title="Customer Edit" pagetitle="Customers" />

    <div class="card" id="customerList">
        <div class="card-body">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                <form id="editCustomerForm" class="tablelist-form" action="{{ route('customers.update', $customer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="edit-customer-id">
                    <div class="mb-3">
                        <label for="edit-customername-field" class="inline-block mb-2 text-base font-medium">Customer Name
                            <span class="text-red-500">*</span></label>
                        <input type="text" id="edit-customername-field" name="name" value="{{ $customer->name }}"
                               class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                               placeholder="Enter customer name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-phone-field" class="inline-block mb-2 text-base font-medium">Phone Number <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="edit-phone-field" name="phone" value="{{ $customer->phone }}"
                               class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                               placeholder="Enter phone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-address-field" class="inline-block mb-2 text-base font-medium">Address <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="edit-address-field" name="address" value="{{ $customer->address }}"
                               class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                               placeholder="Enter address" required>
                    </div>
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('customers.index') }}" data-modal-close="editModal"
                                class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100">Cancel</a>
                        <button type="submit"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@include('customers.create')
@endsection

@push('scripts')
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/listjs.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
