@extends('layouts.master')

@section('title')
    {{ __('Schedule List') }}
@endsection

@push('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <x-page-title title="Schedule List" pagetitle="Schedules" />

    <div class="card" id="scheduleList">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-2">
                <div>
                    <div class="relative xl:w-3/6">
                        <form action="{{ route('schedules.index') }}" method="GET">
                            <div class="flex border border-slate-200 rounded-md overflow-hidden">
                                <input type="text" name="search"
                                       class="flex-1 form-input border-none focus:outline-none focus:ring-0 disabled:bg-slate-100 placeholder:text-slate-400"
                                       placeholder="Search for schedules..." value="{{ $search }}" autocomplete="off">
                                <button type="submit" class="bg-gray-200 text-gray-700 px-4 flex items-center justify-center hover:bg-gray-300">
                                    <i class="ri-search-2-line"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ltr:md:text-end rtl:md:text-start">
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
                <form action="{{ route('schedules.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                    @csrf
                    @method('DELETE')
                    <table class="w-full whitespace-nowrap" id="scheduleTable">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200" style="width: 50px;">
                                    <input type="checkbox" id="checkAll"
                                        class="size-4 border rounded-sm cursor-pointer bg-slate-100 border-slate-200">
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                    Driver</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                    Start Date</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                    End Date</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                    Honor</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 ltr:text-left rtl:text-right">
                                    Status</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><th><form></form></th></tr>
                            @forelse($schedules as $schedule)
                                <tr>
                                    <th class="px-3.5 py-2.5 border-y border-slate-200" scope="row">
                                        <input class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 checked:bg-custom-500 checked:border-custom-500 bulk-delete-checkbox"
                                               type="checkbox" name="ids[]" value="{{ $schedule->id }}">
                                    </th>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $schedule->driver_id == null ? '-' : $schedule->driver->name }}</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">{{ \Carbon\Carbon::parse($schedule->start_date)->format('Y-m-d H:i:s') }}</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">{{ \Carbon\Carbon::parse($schedule->end_date)->format('Y-m-d H:i:s') }}</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">Rp. {{ $schedule->honor ? $schedule->honor : '-'}}</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        <span 
                                            class="delivery_status px-2.5 py-0.5 text-xs inline-block font-medium rounded border
                                            @if($schedule->status == 'on going') bg-yellow-100 border-yellow-200 text-yellow-500
                                            @elseif($schedule->status == 'in progress') bg-blue-100 border-blue-200 text-blue-500
                                            @elseif($schedule->status == 'done') bg-green-100 border-green-200 text-green-500
                                            @elseif($schedule->status == 'cancel') bg-red-100 border-red-200 text-red-500
                                            @else bg-gray-100 border-gray-200 text-gray-500
                                            @endif">
                                            {{ ucwords($schedule->status) }}
                                        </span>
                                    </td>                                    
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">
                                        <div class="flex gap-2">
                                            <a href="javascript:void(0);" class="text-white bg-yellow-500 border-yellow-500 btn hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100"
                                                data-bs-toggle="modal" data-bs-target="#showModal" data-modal-target="showModal"
                                                onclick="openEditModal({{ $schedule->id }}, '{{ $schedule->honor }}', '{{ $schedule->driver_id }}', '{{ $schedule->status }}')">
                                                <i class="ri-edit-line"></i> Edit
                                            </a>

                                            <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 btn-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </form>
            </div>

            <!-- Pagination -->
            <div class="flex justify-end mt-4">
                <div class="flex gap-2 pagination-wrap">
                    {{ $schedules->links() }}
                </div>
            </div>
        </div>
    </div>
    @if(isset($schedule) && !empty($schedule))
    <!-- Edit Schedule Modal -->
    <div id="showModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md">
            <div class="flex items-center justify-between p-4 border-b border-slate-200">
                <h5 class="text-16" id="exampleModalLabel">Add Vehicle</h5>
                <button data-modal-close="showModal" type="button"
                    class="transition-all duration-200 ease-linear "><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                <form action="{{ route('schedules.update', 'schedule_id') }}" method="POST" id="showForm">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="driver_id" class="inline-block mb-2 text-base font-medium">Driver</label>
                        <select name="driver_id" id="driver_id" class="form-input border-slate-200 focus:outline-none focus:border-custom-500">
                            <option value="">Select Driver</option>
                            @foreach($drivers as $driver)
                                <option value="{{ $driver->id }}"{{ old('driver_id',$driver->id) }}>{{ $driver->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="honor" class="inline-block mb-2 text-base font-medium">Honor</label>
                        <input type="number" name="honor" id="honor" class="form-input border-slate-200 focus:outline-none focus:border-custom-500" placeholder="Enter honor amount">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="inline-block mb-2 text-base font-medium">Status</label>
                        <select name="status" id="status" class="form-input border-slate-200 focus:outline-none focus:border-custom-500">
                            <option value="on going" {{ old('status', $schedule->status) == 'on going' ? 'selected' : '' }}>On Going</option>
                            <option value="in progress" {{ old('status', $schedule->status) == 'in progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="done" {{ old('status', $schedule->status) == 'done' ? 'selected' : '' }}>Done</option>
                            <option value="cancel" {{ old('status', $schedule->status) == 'cancel' ? 'selected' : '' }}>Cancel</option>
                        </select>
                    </div>
                    <div class="flex justify-end gap-2 mt-6">
                        <button type="button" data-modal-close="showModal"
                            class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100">Cancel</button>
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                            <i data-lucide="save" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                            <span class="align-middle">Save Change</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
@endsection

@push('scripts')
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/listjs.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        document.querySelector('[data-modal-close="showModal"]').addEventListener('click', () => {
            document.getElementById('showModal').classList.add('hidden');
            document.getElementById('showModal').classList.remove('show');
        });

        function openEditModal(scheduleId, honor, driverId, status) {
            // Set the form action to the correct route with the schedule ID
            const formAction = `/schedules/${scheduleId}`;
            document.getElementById('showForm').action = formAction;
    
            // Set the honor field
            document.getElementById('honor').value = honor;
    
            // Set the selected driver
            document.getElementById('driver_id').value = driverId;
            
            document.getElementById('status').value = status;
        }
    </script>
    
    @include('layouts.script-delete')
@endpush
