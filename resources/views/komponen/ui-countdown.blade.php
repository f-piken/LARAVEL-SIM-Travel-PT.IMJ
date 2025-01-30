@extends('layouts.master')
@section('title')
    {{ __('Countdown') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Countdown" pagetitle="UI Elements" />

    <div>
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic Examples</h6>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                    <div class="text-center">
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="745">0</span></h4>
                        <p class="mb-0 text-slate-500">Working Hours</p>
                    </div>
                    <div class="text-center text-custom-500">
                        <h4 class="mb-2 fs-4xl "><span class="counter-value" data-target="365">0</span></h4>
                        <p class="mb-0 text-custom-500">Completed Projects</p>
                    </div>
                    <div class="text-center">
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="4645">0</span></h4>
                        <p class="mb-0 text-slate-500">Happy Users & Clients</p>
                    </div>
                    <div class="text-center">
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="130">0</span></h4>
                        <p class="mb-0 text-slate-500">Awards Received</p>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Counter with Symbols</h6>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                    <div class="text-center">
                        <h4 class="mb-2 fs-4xl">$<span class="counter-value" data-target="674.3">0</span>k</h4>
                        <p class="mb-0 text-slate-500">Total Earnings</p>
                    </div>
                    <div class="text-center">
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="54.41">0</span>k</h4>
                        <p class="mb-0 text-slate-500">Total Orders</p>
                    </div>
                    <div class="text-center">
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="4645">0</span></h4>
                        <p class="mb-0 text-slate-500">Customers</p>
                    </div>
                    <div class="text-center">
                        <h4 class="mb-2 fs-4xl">$<span class="counter-value" data-target="165.89">0</span>k</h4>
                        <p class="mb-0 text-slate-500">My Balance</p>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Counter with Grid</h6>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                    <div class="px-3 py-6 text-center border rounded-md border-slate-200">
                        <h4 class="mb-2 fs-4xl">$<span class="counter-value" data-target="674.3">0</span>k</h4>
                        <p class="mb-0 text-slate-500">Total Earnings</p>
                    </div>
                    <div class="px-3 py-6 text-center border rounded-md border-slate-200">
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="54.41">0</span>k</h4>
                        <p class="mb-0 text-slate-500">Total Orders</p>
                    </div>
                    <div class="px-3 py-6 text-center border rounded-md border-slate-200">
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="4645">0</span></h4>
                        <p class="mb-0 text-slate-500">Customers</p>
                    </div>
                    <div class="px-3 py-6 text-center border rounded-md border-slate-200">
                        <h4 class="mb-2 fs-4xl">$<span class="counter-value" data-target="165.89">0</span>k</h4>
                        <p class="mb-0 text-slate-500">My Balance</p>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Counter with Icons</h6>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                    <div class="px-3 py-6 text-center border rounded-md border-slate-200">
                        <div
                            class="flex items-center justify-center size-12 mx-auto mb-4 rounded-md text-15 bg-custom-50">
                            <i data-lucide="smile" class="text-custom-500 fill-custom-200"></i>
                        </div>
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="8000">0</span>k</h4>
                        <p class="mb-0 text-slate-500">Happy Clients</p>
                    </div>
                    <div class="px-3 py-6 text-center border rounded-md border-slate-200">
                        <div
                            class="flex items-center justify-center size-12 mx-auto mb-4 rounded-md text-15 bg-red-50">
                            <i data-lucide="download" class="text-red-500 fill-red-200"></i></div>
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="3000">0</span>k</h4>
                        <p class="mb-0 text-slate-500">Downloads</p>
                    </div>
                    <div class="px-3 py-6 text-center border rounded-md border-slate-200">
                        <div
                            class="flex items-center justify-center size-12 mx-auto mb-4 rounded-md text-15 bg-green-50">
                            <i data-lucide="monitor" class="text-green-500 fill-green-200"></i></div>
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="4645">784</span>k</h4>
                        <p class="mb-0 text-slate-500">Project Completed</p>
                    </div>
                    <div class="px-3 py-6 text-center border rounded-md border-slate-200">
                        <div
                            class="flex items-center justify-center size-12 mx-auto mb-4 rounded-md text-15 bg-sky-50">
                            <i data-lucide="clock-4" class="text-sky-500 fill-sky-200"></i></div>
                        <h4 class="mb-2 fs-4xl"><span class="counter-value" data-target="365">0</span></h4>
                        <p class="mb-0 text-slate-500">Working Days</p>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Counter with Card Colors</h6>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                    <div class="px-3 py-6 text-center border rounded-md border-custom-200">
                        <div
                            class="flex items-center justify-center size-12 mx-auto mb-4 rounded-md text-15 bg-custom-50">
                            <i data-lucide="smile" class="text-custom-500 fill-custom-200"></i>
                        </div>
                        <h4 class="mb-1 fs-4xl"><span class="counter-value" data-target="8000">0</span>k</h4>
                        <p class="mb-0 text-slate-500">Happy Clients</p>
                    </div>
                    <div
                        class="px-3 py-6 text-center bg-red-100 border border-red-200 rounded-md">
                        <div
                            class="flex items-center justify-center size-12 mx-auto mb-4 rounded-md bg-red-50 text-15">
                            <i data-lucide="download" class="text-red-500 fill-red-200"></i></div>
                        <h4 class="mb-1 text-red-500 fs-4xl"><span class="counter-value" data-target="3000">0</span>k
                        </h4>
                        <p class="mb-0 text-red-400">Downloads</p>
                    </div>
                    <div
                        class="px-3 py-6 text-center bg-green-100 border border-green-100 rounded-md">
                        <div
                            class="flex items-center justify-center size-12 mx-auto mb-4 rounded-md bg-green-50 text-15">
                            <i data-lucide="monitor" class="text-green-500 fill-green-200"></i>
                        </div>
                        <h4 class="mb-1 text-green-500 fs-4xl"><span class="counter-value" data-target="4645">784</span>k
                        </h4>
                        <p class="mb-0 text-green-400">Project Completed</p>
                    </div>
                    <div
                        class="px-3 py-6 text-center border rounded-md bg-sky-500 border-sky-500">
                        <div
                            class="flex items-center justify-center size-12 mx-auto mb-4 rounded-md bg-white/90 text-15">
                            <i data-lucide="clock-4" class="text-sky-500 fill-sky-200"></i></div>
                        <h4 class="mb-1 text-sky-50 fs-4xl"><span class="counter-value" data-target="365">0</span></h4>
                        <p class="mb-0 text-sky-200">Working Days</p>
                    </div>
                </div>
            </div>
        </div><!--end card-->
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
