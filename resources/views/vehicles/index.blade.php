@extends('layouts.master')
@section('title')
    {{ __('Vehicles List') }}
@endsection
@push('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@section('content')
<!-- page title -->
<x-page-title title="Vehicle List" pagetitle="Vehicles" />

<div class="card" id="vehicleList">
    <div class="card-body">
        <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-2">
            <div>
                <div class="relative xl:w-3/6">
                    <form action="{{ route('vehicles.index') }}" method="GET">
                        <div class="flex border border-slate-200 rounded-md overflow-hidden">
                            <input type="text" name="search"
                                   class="flex-1 form-input border-none focus:outline-none focus:ring-0 disabled:bg-slate-100 placeholder:text-slate-400"
                                   placeholder="Search for vehicles..." value="{{ $search }}" autocomplete="off">
                            <button type="submit" class="bg-gray-200 text-gray-700 px-4 flex items-center justify-center hover:bg-gray-300">
                                <i class="ri-search-2-line"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ltr:md:text-end rtl:md:text-start">
                <button type="button" data-bs-toggle="modal" data-bs-target="#showModal" data-modal-target="showModal"
                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 add-btn">
                    <i class="align-bottom ri-add-line me-1"></i> Add Vehicle
                </button>
                <button type="button" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 btn-bulk-delete">
                    <i class="ri-delete-bin-2-line"></i>
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            @if (session('success'))
            <div id="alert"
                class="relative mb-2 p-3 pr-12 text-sm bg-green-500 border border-transparent rounded-md text-green-50">
                <button data-dismiss="alert"
                    class="absolute top-0 bottom-0 right-0 p-3 text-green-200 transition hover:text-green-100"><i
                        data-lucide="x" class="h-5"></i></button>
                <span class="font-bold">Success!</span> {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('vehicles.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                @csrf
                @method('DELETE')
                <table class="w-full whitespace-nowrap" id="vehicleTable">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200" style="width: 50px;">
                                <input type="checkbox" id="checkAll"
                                    class="size-4 border rounded-sm cursor-pointer bg-slate-100 border-slate-200">
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                Vehicle Name</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                Type</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                License Plate</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                Capacity</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                Rental Price</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                Availability</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><th><form></form></th></tr>
                        @forelse($vehicles as $item)
                        <tr>
                            <th class="px-3.5 py-2.5 border-y border-slate-200" scope="row">
                                <input
                                    class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 checked:bg-custom-500 checked:border-custom-500 bulk-delete-checkbox"
                                    type="checkbox" name="ids[]" value="{{ $item->id }}">
                            </th>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->name }}</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->type }}</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->license_plate }}</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->capacity }}</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->rental_price_per_day }}</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">
                                {{ $item->is_available ? 'Available' : 'Not Available' }}</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">
                                <form action="{{ route('vehicles.destroy', $item->id) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <div class="flex gap-2">
                                        <a class="text-white bg-yellow-500 border-yellow-500 btn hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100"
                                            href="{{ route('vehicles.edit', $item->id) }}">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <a class="text-white bg-slate-500 border-slate-500 btn hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100"
                                            href="{{ route('vehicles.show', $item->id) }}">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <button type="button" id="sa-params" class="text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 btn-delete">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">No vehicles available</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </form>                
        </div>

        <!-- Pagination -->
        <div class="flex justify-end mt-4">
            <div class="flex gap-2 pagination-wrap">
                {{ $vehicles->links() }}
            </div>
        </div>
    </div>
</div>

@include('vehicles.create')
@endsection

@push('scripts')
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/listjs.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    @include('layouts.script-delete')
@endpush
