@extends('layouts.master')
@section('title')
    {{ __('Vehicle Details') }}
@endsection

@section('content')
<x-page-title title="Vehicle Details" pagetitle="Vehicles" />

<div class="card shadow-lg rounded-lg overflow-hidden">
    <div class="card-body p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
            Vehicle Information
        </h2>
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

        <div class="flex justify-end gap-2 mt-6">
            <a href="{{ route('vehicles.index') }}" class="text-white btn bg-slate-500 border-slate-500 hover:bg-slate-600">Back</a>
            <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Edit</a>
        </div>
    </div>
</div>
@endsection
