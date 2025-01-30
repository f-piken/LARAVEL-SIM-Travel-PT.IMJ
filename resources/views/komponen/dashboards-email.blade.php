@extends('layouts.master')
@section('title')
    {{ __('Email') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Email Analytics" pagetitle="Dashboards" />

    <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
        <div class="col-span-12 card 2xl:col-span-12">
            <div class="card-body">
                <div
                    class="grid grid-cols-1 gap-5 divide-y md:divide-x md:divide-y-0 md:grid-cols-2 2xl:grid-cols-4 rtl:divide-x-reverse divide-slate-200">
                    <div
                        class="py-5 first:pt-0 md:first:pt-5 md:last:pb-5 last:pb-0 md:px-5 md:ltr:first:pl-0 md:rtl:first:pr-0 md:ltr:last:pr-0 md:rtl:last:pl-0">
                        <div class="flex mb-4">
                            <div class="w-36 shrink-0">
                                <p class="mb-6 uppercase text-slate-500"><i data-lucide="rocket"
                                        class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Sent</span></p>
                                <h5 class="mb-0"><span class="counter-value" data-target="1452">0</span></h5>
                            </div>
                            <div id="sentEmail" data-chart-colors='["bg-custom-500"]' dir="ltr"
                                class="grow apex-charts"></div>
                        </div>
                        <p class="text-slate-500">238 Emails (Monthly)</p>

                    </div><!--end col-->
                    <div
                        class="py-5 first:pt-0 md:first:pt-5 md:last:pb-5 last:pb-0 md:px-5 md:ltr:first:pl-0 md:rtl:first:pr-0 md:ltr:last:pr-0 md:rtl:last:pl-0">
                        <div class="flex mb-4">
                            <div class="w-36 shrink-0">
                                <p class="mb-6 uppercase text-slate-500"><i
                                        data-lucide="mouse-pointer-click"
                                        class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Open
                                        Rate</span></p>
                                <h5 class="mb-0"><span class="counter-value" data-target="92.74">0</span>%</h5>
                            </div>
                            <div id="openRate" data-chart-colors='["bg-green-500"]' dir="ltr"
                                class="grow apex-charts"></div>
                        </div>
                        <p class="text-slate-500">60 Opened (Monthly)</p>
                    </div><!--end col-->
                    <div
                        class="py-5 first:pt-0 md:first:pt-5 md:last:pb-5 last:pb-0 md:px-5 md:ltr:first:pl-0 md:rtl:first:pr-0 md:ltr:last:pr-0 md:rtl:last:pl-0">
                        <div class="flex mb-4">
                            <div class="w-36 shrink-0">
                                <p class="mb-6 uppercase text-slate-500"><i
                                        data-lucide="mouse-pointer-square"
                                        class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Clicks Rate</span></p>
                                <h5 class="mb-0"><span class="counter-value" data-target="3.79">0</span>%</h5>
                            </div>
                            <div id="clickRate" data-chart-colors='["bg-red-500"]' dir="ltr" class="grow apex-charts">
                            </div>
                        </div>
                        <p class="text-slate-500">29 Clicks (Monthly)</p>
                    </div><!--end col-->
                    <div
                        class="py-5 first:pt-0 md:first:pt-5 md:last:pb-5 last:pb-0 md:px-5 md:ltr:first:pl-0 md:rtl:first:pr-0 md:ltr:last:pr-0 md:rtl:last:pl-0">
                        <div class="flex mb-4">
                            <div class="w-36 shrink-0">
                                <p class="mb-6 uppercase text-slate-500"><i data-lucide="goal"
                                        class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Click
                                        Through</span></p>
                                <h5 class="mb-0"><span class="counter-value" data-target="4.06">0</span>%</h5>
                            </div>
                            <div id="clickThrough" data-chart-colors='["bg-sky-500"]' dir="ltr"
                                class="grow apex-charts"></div>
                        </div>
                        <p class="text-slate-500">29 Click Through (Monthly)</p>
                    </div><!--end col-->
                </div><!--end grid-->
            </div>
        </div>
        <div class="col-span-12 card md:col-span-6 2xl:col-span-3">
            <div class="card-body">
                <a href="#!" data-tooltip="default"
                    data-tooltip-content="Taking the number of delivered emails and dividing it by the total number of emails sent"
                    class="ltr:float-right rtl:float-left text-slate-500"><i data-lucide="info"
                        class="size-4"></i></a>
                <p class="mb-3 text-slate-500">Delivered Rate</p>
                <h5 class="mb-4"><span class="counter-value" data-target="100">0</span>%</h5>

                <div id="deliveredRate" data-chart-colors='["bg-sky-500"]' dir="ltr" class="grow apex-charts"></div>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card md:col-span-6 2xl:col-span-3">
            <div class="card-body">
                <a href="#!" data-tooltip="default"
                    data-tooltip-content="Taking the number of delivered emails and dividing it by the total number of emails sent"
                    class="ltr:float-right rtl:float-left text-slate-500"><i data-lucide="info"
                        class="size-4"></i></a>
                <p class="mb-3 text-slate-500">Hard Bounce Rate</p>
                <h5 class="mb-4"><span class="counter-value" data-target="89">0</span>%</h5>

                <div id="hardBounceRate" data-chart-colors='["bg-green-500"]' dir="ltr" class="grow apex-charts"></div>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card md:col-span-6 2xl:col-span-3">
            <div class="card-body">
                <a href="#!" data-tooltip="default"
                    data-tooltip-content="Taking the number of delivered emails and dividing it by the total number of emails sent"
                    class="ltr:float-right rtl:float-left text-slate-500"><i data-lucide="info"
                        class="size-4"></i></a>
                <p class="mb-3 text-slate-500">Unsubscribed Rate</p>
                <h5 class="mb-4"><span class="counter-value" data-target="33">0</span>%</h5>

                <div id="unsubscribedRate" data-chart-colors='["bg-yellow-500"]' dir="ltr"
                    class="grow apex-charts"></div>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card md:col-span-6 2xl:col-span-3">
            <div class="card-body">
                <a href="#!" data-tooltip="default"
                    data-tooltip-content="Taking the number of delivered emails and dividing it by the total number of emails sent"
                    class="ltr:float-right rtl:float-left text-slate-500"><i data-lucide="info"
                        class="size-4"></i></a>
                <p class="mb-3 text-slate-500">Spam Report Rate</p>
                <h5 class="mb-4"><span class="counter-value" data-target="11.8">0</span>%</h5>

                <div id="spanReportRate" data-chart-colors='["bg-purple-500"]' dir="ltr" class="grow apex-charts">
                </div>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card 2xl:col-span-6">
            <div class="card-body">
                <div class="flex items-center gap-2">
                    <h6 class="text-15 grow">Email Data</h6>
                    <div class="relative dropdown">
                        <button type="button"
                            class="px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dropdown-toggle"
                            id="emailDataDropdown" data-bs-toggle="dropdown">
                            This Yearly <i data-lucide="chevron-down" class="inline-block size-4 ltr:ml-1 rlt:mr-1"></i>
                        </button>

                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                            aria-labelledby="emailDataDropdown">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">1 Weekly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">1 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">3 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">6 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">This Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="emailDataChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card lg:col-span-6 2xl:col-span-3">
            <div class="card-body">
                <div class="flex items-center">
                    <h6 class="text-15 grow">Email Marketing</h6>
                    <div class="relative dropdown shrink-0">
                        <button id="orderAction1" data-bs-toggle="dropdown"
                            class="flex items-center justify-center size-[30px] dropdown-toggle p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100"><i
                                data-lucide="more-horizontal" class="size-3"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                            aria-labelledby="orderAction1">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">This Year</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">Last Year</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="emailMarketingChart" class="apex-charts"
                    data-chart-colors='["bg-sky-500", "bg-green-500", "bg-red-500"]' dir="ltr"></div>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card lg:col-span-6 2xl:col-span-3">
            <div class="flex flex-col h-full card-body">
                <div class="mb-auto">
                    <h4 class="mb-2">Experience Our Fresh Email Composition Interface</h4>
                    <p class="mb-5 text-slate-500">A local-part, the symbol @, and a domain, which may
                        be a domain name or an IP address enclosed in brackets.</p>
                    <a href="{{ url('apps-mailbox') }}"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Compose
                        Email</a>
                </div>
                <div>
                    <img src="{{ URL::asset('build/images/email-dashboard.png') }}" alt=""
                        class="h-48 ltr:ml-auto rtl:mr-auto -scale-x-100">
                </div>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card 2xl:col-span-12">
            <div class="card-body">
                <div class="grid items-center grid-cols-1 gap-3 mb-5 xl:grid-cols-12">
                    <div class="xl:col-span-3">
                        <h6 class="text-15">Email Performance</h6>
                    </div><!--end col-->
                    <div class="xl:col-span-3 xl:col-start-10">
                        <div class="flex gap-3">
                            <div class="relative grow">
                                <input type="text"
                                    class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                    placeholder="Search for ..." autocomplete="off">
                                <i data-lucide="search"
                                    class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 fill-slate-100"></i>
                            </div>
                            <button type="button"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100"><i
                                    class="align-baseline ltr:pr-1 rtl:pl-1 ri-download-2-line"></i> Export</button>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

                <div class="-mx-5 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead
                            class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500">
                            <tr>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheckAll"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200">
                                    Email</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200">
                                    Create Date</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200">
                                    Open Rate (%)</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200">
                                    Click Through (%)</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200">
                                    Click Rate (%)</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200">
                                    Unsubscribed (%)</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200">
                                    Bounce (%)</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200">
                                    Spam(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck1"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Adverting & Marketing Agencies</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    05 Aug, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    18.65%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    2.66%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    14.14%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.19%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.29%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.03%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck2"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Automotive & Aerospace</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    20 Sep, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    20.13%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    3.44%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    18.03%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.18%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.18%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.00%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck3"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Education</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    04 Jun, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    18.74%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    2.80%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    14.94%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.17%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.35%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.02%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck4"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Financial Services</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    11 Feb, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    18.23%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    2.72%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    14.79%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.16%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.30%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.00%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck5"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Food & Beverage</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    26 Nov, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    15.48%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.69%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    10.69%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.11%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.63%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.00%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck6"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Healthcare Services</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    19 July, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    19.12%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    2.98%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    15.11%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.17%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.08%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.00%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck7"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Professional Services</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    14 Jun, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    18.14%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    2.39%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    12.92%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.17%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.10%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.00%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck8"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Logistics & Wholesale</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    03 Dec, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    18.50%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.20%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    14.84%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.15%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.40%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.00%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck8"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Real Estate Agents & Brokers</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    03 Dec, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    18.06%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    2.02%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    11.51%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.22%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.18%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.00%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck9"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Nonprofit</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    03 Dec, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    20.39%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    2.66%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    12.99%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.17%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    1.09%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.01%</td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    <div class="flex items-center h-full">
                                        <input id="emailPerfomanceCheck9"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    Retail</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    03 Dec, 2023</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    14.98%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    2.25%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    14.82%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.12%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.69%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                    0.01%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col items-center mt-5 md:flex-row">
                    <div class="mb-4 grow md:mb-0">
                        <p class="text-slate-500">Showing <b>10</b> of <b>19</b> Results</p>
                    </div>
                    <ul class="flex flex-wrap items-center gap-2 shrink-0">
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 mr-1 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">2</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">Next
                                <i class="size-4 ml-1 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!--dashboard email init js-->
    <script src="{{ URL::asset('build/js/pages/dashboards-email.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
