@extends('layouts.master')
@section('title')
    {{ __('Main Attendance') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Main Attendance" pagetitle="HR Management" />

    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-12">
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 shrink-0">
                        <i data-lucide="users-2"></i></div>
                    <div class="overflow-hidden grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="43">0</span></h5>
                        <p class="truncate text-slate-500">Total Employee</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 text-red-500 bg-red-100 rounded-md text-15 shrink-0">
                        <i data-lucide="user-x-2"></i></div>
                    <div class="overflow-hidden grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="6">0</span></h5>
                        <p class="truncate text-slate-500">Absent Employee (Today)</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 text-green-500 bg-green-100 rounded-md text-15 shrink-0">
                        <i data-lucide="user-check-2"></i></div>
                    <div class="overflow-hidden grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="32">0</span></h5>
                        <p class="truncate text-slate-500">Present Employee (Today)</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 rounded-md text-custom-500 bg-custom-100 text-15 shrink-0">
                        <i data-lucide="briefcase"></i></div>
                    <div class="overflow-hidden grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="22">0</span></h5>
                        <p class="truncate text-slate-500">Working Days (Current Month)</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div>

    <div class="card">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-12">
                <div class="xl:col-span-3">
                    <div class="relative">
                        <input type="text"
                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 fill-slate-100"></i>
                    </div>
                </div><!--end col-->
                <div class="xl:col-span-2 xl:col-start-11">
                    <div class="relative">
                        <i data-lucide="calendar-range"
                            class="absolute size-4 ltr:left-3 rtl:right-3 top-3 text-slate-500"></i>
                        <input type="text"
                            class="ltr:pl-10 rtl:pr-10 form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" readonly="readonly"
                            placeholder="Select Date">
                    </div>
                </div>
            </div><!--end grid-->
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead
                        class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Employee
                                Name</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">01</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">02</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">03</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">04</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">05</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 active">06
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">07</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">08</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">09</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">10</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">11</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">12</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">13</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">14</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">15</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">16</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">17</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">18</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">19</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">20</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">21</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">22</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">23</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">24</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">25</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">26</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">27</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">28</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">29</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">30</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Patricia Garcia</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Tonya Johnson</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Willie Torres</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Jose White</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Juliette Fecteau</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Jonas Frederiksen</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Kim Broberg</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Nancy Reynolds</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Thomas Hatfield</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Holly Kavanaugh</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end card-->



    <div id="addOrderModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md">
            <div class="flex items-center justify-between p-4 border-b">
                <h5 class="text-16">Attendance Info (05 June, 2023)</h5>
                <button data-modal-close="addOrderModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <div class="rounded-md bg-slate-100">
                    <div class="p-3">
                        <p class="mb-1 text-slate-500">Check In Date & Time</p>
                        <h6>Monday, 05 June, 2023 <b>08:29 AM</b></h6>
                    </div>
                    <div class="p-5">
                        <div
                            class="flex items-center justify-center size-24 mx-auto bg-white rounded-full text-16 outline outline-white outline-offset-4">
                            <b>08:15</b> <small class="ltr:ml-1 rtl:mr-1">Hrs</small>
                        </div>
                    </div>
                    <div class="p-3">
                        <p class="mb-1 text-slate-500">Check Out Date & Time</p>
                        <h6>Monday, 05 June, 2023 <b>06:11 AM</b></h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end add user-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
