@extends('layouts.master')
@section('title')
    {{ __('Vehicle Details') }}
@endsection

@section('content')
<x-page-title title="Vehicle Details" pagetitle="Vehicles" />

<div class="card shadow-lg rounded-lg overflow-hidden">
    <div class="card-body p-6">
        <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-2">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                Vehicle Information
            </h2>
            <div class="relative dropdown">
                <div class="flex justify-end">
                    <button
                        class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                        id="categoryNotes1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                            class="size-4"></i></button>
                </div>
                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                    aria-labelledby="categoryNotes1">
                    <li>
                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                            href="{{ route('vehicles.edit', $vehicle->id) }}"><i data-lucide="file-edit"
                                class="inline-block size-3 mr-1"></i> <span
                                class="align-middle">Edit</span></a>
                    </li>
                    <li>
                        <a data-modal-target="deleteModal"
                            class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                            href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                            <span class="align-middle">Delete</span></a>
                    </li>
                    <li>
                        <a data-modal-target="deleteModal"
                            class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                            href="{{ route('vehicles.index') }}"><i data-lucide="book" class="inline-block size-3 mr-1"></i>
                            <span class="align-middle">Vehicle Data</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-lg grid md:grid-cols-2 gap-6 text-gray-700">
            <div><strong>🚘 Vehicle Name:</strong> {{ $vehicle->name }}</div>
            <div><strong>📄 Vehicle Type:</strong> {{ $vehicle->type }}</div>
            <div><strong>🔢 License Plate:</strong> {{ $vehicle->license_plate }}</div>
            <div><strong>👥 Capacity:</strong> {{ $vehicle->capacity }} Seats</div>
            <div><strong>💰 Rental Price:</strong> Rp {{ number_format($vehicle->rental_price_per_day, 2) }}</div>
            <div>
                <strong>✅ Availability:</strong> 
                <span class="px-3 py-1 rounded-full text-white text-sm font-medium {{ $vehicle->is_available ? 'bg-green-500' : 'bg-red-500' }}">
                    {{ $vehicle->is_available ? 'Available' : 'Not Available' }}
                </span>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-gray-800 mt-6 mb-4 flex items-center">
            Vehicle Details
        </h2>

        <div class="grid gap-6">
            <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">📜 Documents</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach(['stnk', 'buku_kir', 'kartu_tap_oli'] as $detail)
                        <span class="px-4 py-1 text-sm rounded-full font-semibold text-white {{ $vehicle->details->$detail ? 'bg-green-500' : 'bg-red-500' }}">
                            {{ ucwords(str_replace('_', ' ', $detail)) }}: {{ $vehicle->details->$detail ? 'Yes' : 'No' }}
                        </span>
                    @endforeach
                </div>
            </div>

            <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">🛠 Equipment</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach(['dongkrak', 'ban_serep', 'kunci_roda'] as $detail)
                        <span class="px-4 py-1 text-sm rounded-full font-semibold text-white {{ $vehicle->details->$detail ? 'bg-green-500' : 'bg-red-500' }}">
                            {{ ucwords(str_replace('_', ' ', $detail)) }}: {{ $vehicle->details->$detail ? 'Yes' : 'No' }}
                        </span>
                    @endforeach
                </div>
            </div>

            <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">⛽ Fuel</h3>
                <div class="flex">
                    <span class="px-4 py-1 text-sm rounded-full font-semibold text-white {{ $vehicle->details->bbm_full ? 'bg-green-500' : 'bg-red-500' }}">
                        BBM Full: {{ $vehicle->details->bbm_full ? 'Yes' : 'No' }}
                    </span>
                </div>
            </div>

            <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">💡 Electrical</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach(['lampu_utama', 'lampu_belakang', 'lampu_sein', 'lampu_dalam', 'lcd', 'ac'] as $detail)
                        <span class="px-4 py-1 text-sm rounded-full font-semibold text-white {{ $vehicle->details->$detail ? 'bg-green-500' : 'bg-red-500' }}">
                            {{ ucwords(str_replace('_', ' ', $detail)) }}: {{ $vehicle->details->$detail ? 'Yes' : 'No' }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-gray-800 mt-6">Last Updated</h2>
        <p class="text-gray-600"><strong>Updated At:</strong> {{ \Carbon\Carbon::parse($vehicle->updated_at)->addHours(7)->format('d M Y H:i:s') }}</p>
    </div>
</div>
<form id="deleteForm" action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <div id="deleteModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal"
                        class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                            data-lucide="x" class="size-5"></i></button>
                </div>
                <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500">Are you certain you want to delete this record?</p>
                    <div class="flex justify-center gap-2 mt-6">
                        <button type="reset" data-modal-close="deleteModal"
                            class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100">Cancel</button>
                        <button type="submit"
                            class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100">Yes,
                            Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('scripts')
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/listjs.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    @include('layouts.script-delete')
@endpush