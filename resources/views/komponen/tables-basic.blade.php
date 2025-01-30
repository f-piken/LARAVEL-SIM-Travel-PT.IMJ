@extends('layouts.master')
@section('title')
    {{ __('Basic Table') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Basic Table" pagetitle="Tables" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Default Table</h6>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Order
                                    ID</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Shop
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Price
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Amezon</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Cleo Carson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Shoppers</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Juston Eichmann
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$7,546</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Flipkart</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Bettie Johson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$1,350</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Tailwick</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Maritza Blanda</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Without Borders</h6>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Order ID</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Shop</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Price</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-transparent"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">Amezon</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">Cleo Carson</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-transparent"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">Shoppers</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">Juston Eichmann</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">$7,546</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-transparent"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">Flipkart</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">Bettie Johson</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">$1,350</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-transparent"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">Tailwick</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">Maritza Blanda</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-transparent"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Striped Even Rows</h6>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Order ID</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Shop
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Price</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Amezon</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Cleo Carson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Shoppers</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Juston Eichmann
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$7,546</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Flipkart</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Bettie Johson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$1,350</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Tailwick</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Maritza Blanda
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Striped Odd Rows</h6>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="ltr:text-left rtl:text-right ">
                            <tr class="">
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Order ID</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Shop
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Price</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-slate-50 even:bg-white">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Amezon</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Cleo Carson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr class="odd:bg-slate-50 even:bg-white">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Shoppers</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Juston Eichmann
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$7,546</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr class="odd:bg-slate-50 even:bg-white">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Flipkart</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Bettie Johson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$1,350</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr class="odd:bg-slate-50 even:bg-white">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Tailwick</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Maritza Blanda
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Hoverable Rows</h6>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="ltr:text-left rtl:text-right ">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Order ID</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Shop
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Price</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="transition-all duration-300 ease-linear hover:bg-slate-50">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Amezon</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Cleo Carson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr class="transition-all duration-300 ease-linear hover:bg-slate-50">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Shoppers</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Juston Eichmann
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$7,546</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr class="transition-all duration-300 ease-linear hover:bg-slate-50">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Flipkart</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Bettie Johson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$1,350</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr class="transition-all duration-300 ease-linear hover:bg-slate-50">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Tailwick</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Maritza Blanda
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Hoverable Striped Rows</h6>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="ltr:text-left rtl:text-right ">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Order ID</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Shop
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Price</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="even:bg-slate-50 hover:bg-slate-50 even:hover:bg-slate-100">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Amezon</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Cleo Carson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr
                                class="even:bg-slate-50 hover:bg-slate-50 even:hover:bg-slate-100">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Shoppers</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Juston Eichmann
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$7,546</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr
                                class="even:bg-slate-50 hover:bg-slate-50 even:hover:bg-slate-100">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Flipkart</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Bettie Johson</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$1,350</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr
                                class="even:bg-slate-50 hover:bg-slate-50 even:hover:bg-slate-100">
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Tailwick</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">Maritza Blanda
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Border Colors</h6>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="ltr:text-left rtl:text-right ">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500">
                                    Order ID</th>
                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500">
                                    Shop</th>
                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500">
                                    Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500">
                                    Price</th>
                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                <td class="px-3.5 py-2.5 border border-custom-500"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5 border border-custom-500">Amezon</td>
                                <td class="px-3.5 py-2.5 border border-custom-500">Cleo Carson</td>
                                <td class="px-3.5 py-2.5 border border-custom-500">$4,521</td>
                                <td class="px-3.5 py-2.5 border border-custom-500"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border border-custom-500"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5 border border-custom-500">Shoppers</td>
                                <td class="px-3.5 py-2.5 border border-custom-500">Juston Eichmann
                                </td>
                                <td class="px-3.5 py-2.5 border border-custom-500">$7,546</td>
                                <td class="px-3.5 py-2.5 border border-custom-500"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border border-custom-500"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5 border border-custom-500">Flipkart</td>
                                <td class="px-3.5 py-2.5 border border-custom-500">Bettie Johson
                                </td>
                                <td class="px-3.5 py-2.5 border border-custom-500">$1,350</td>
                                <td class="px-3.5 py-2.5 border border-custom-500"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border border-custom-500"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5 border border-custom-500">Tailwick</td>
                                <td class="px-3.5 py-2.5 border border-custom-500">Maritza Blanda
                                </td>
                                <td class="px-3.5 py-2.5 border border-custom-500">$4,521</td>
                                <td class="px-3.5 py-2.5 border border-custom-500"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Bordered Table</h6>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="ltr:text-left rtl:text-right ">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Order
                                    ID</th>
                                <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Shop
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border border-slate-200">
                                    Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Price
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                <td class="px-3.5 py-2.5 border border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5 border border-slate-200">Amezon</td>
                                <td class="px-3.5 py-2.5 border border-slate-200">Cleo Carson</td>
                                <td class="px-3.5 py-2.5 border border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5 border border-slate-200">Shoppers</td>
                                <td class="px-3.5 py-2.5 border border-slate-200">Juston Eichmann</td>
                                <td class="px-3.5 py-2.5 border border-slate-200">$7,546</td>
                                <td class="px-3.5 py-2.5 border border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5 border border-slate-200">Flipkart</td>
                                <td class="px-3.5 py-2.5 border border-slate-200">Bettie Johson</td>
                                <td class="px-3.5 py-2.5 border border-slate-200">$1,350</td>
                                <td class="px-3.5 py-2.5 border border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5 border border-slate-200">Tailwick</td>
                                <td class="px-3.5 py-2.5 border border-slate-200">Maritza Blanda</td>
                                <td class="px-3.5 py-2.5 border border-slate-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border border-slate-200"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Primary Colors Table</h6>

                <div class="overflow-x-auto">
                    <table class="w-full bg-custom-50">
                        <thead class="ltr:text-left rtl:text-right bg-custom-100">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-custom-200">
                                    Order ID</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-custom-200">
                                    Shop</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-custom-200">
                                    Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-custom-200">
                                    Price</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-custom-200">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-custom-200"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">Amezon</td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">Cleo Carson
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-custom-200"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">Shoppers</td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">Juston Eichmann
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">$7,546</td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-custom-200"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">Flipkart</td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">Bettie Johson
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">$1,350</td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-custom-200"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">Tailwick</td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">Maritza Blanda
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200">$4,521</td>
                                <td class="px-3.5 py-2.5 border-y border-custom-200"><a
                                        href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Dark Table</h6>

                <div class="overflow-x-auto">
                    <table class="w-full bg-slate-800">
                        <thead class="ltr:text-left rtl:text-right bg-white/5">
                            <tr>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-700 text-slate-400">
                                    Order ID</th>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-700 text-slate-400">
                                    Shop</th>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-700 text-slate-400">
                                    Customer</th>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-700 text-slate-400">
                                    Price</th>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-700 text-slate-400">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    <a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    Amezon</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    Cleo Carson</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    $4,521</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    <a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    <a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    Shoppers</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    Juston Eichmann</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    $7,546</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    <a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    <a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    Flipkart</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    Bettie Johson</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    $1,350</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    <a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    <a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    Tailwick</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    Maritza Blanda</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    $4,521</td>
                                <td
                                    class="px-3.5 py-2.5 border-y border-slate-700 text-slate-400">
                                    <a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Custom Table</h6>

                <div class="overflow-x-auto">
                    <table class="w-full border-separate table-custom border-spacing-y-1">
                        <thead class="ltr:text-left rtl:text-right ">
                            <tr
                                class="relative rounded-md bg-slate-50 after:absolute after:border-l-2 after:left-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500">
                                <th class="px-3.5 py-2.5 font-semibold">Order ID</th>
                                <th class="px-3.5 py-2.5 font-semibold">Shop</th>
                                <th class="px-3.5 py-2.5 font-semibold">Customer</th>
                                <th class="px-3.5 py-2.5 font-semibold">Price</th>
                                <th class="px-3.5 py-2.5 font-semibold">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="relative rounded-md bg-slate-50 after:absolute after:border-l-2 after:left-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500">
                                <td class="px-3.5 py-2.5"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                </td>
                                <td class="px-3.5 py-2.5">Amezon</td>
                                <td class="px-3.5 py-2.5">Cleo Carson</td>
                                <td class="px-3.5 py-2.5">$4,521</td>
                                <td class="px-3.5 py-2.5"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr
                                class="relative rounded-md bg-slate-50 after:absolute after:border-l-2 after:left-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 active">
                                <td class="px-3.5 py-2.5"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                </td>
                                <td class="px-3.5 py-2.5">Shoppers</td>
                                <td class="px-3.5 py-2.5">Juston Eichmann</td>
                                <td class="px-3.5 py-2.5">$7,546</td>
                                <td class="px-3.5 py-2.5"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr
                                class="relative rounded-md bg-slate-50 after:absolute after:border-l-2 after:left-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500">
                                <td class="px-3.5 py-2.5"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                </td>
                                <td class="px-3.5 py-2.5">Flipkart</td>
                                <td class="px-3.5 py-2.5">Bettie Johson</td>
                                <td class="px-3.5 py-2.5">$1,350</td>
                                <td class="px-3.5 py-2.5"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                            <tr
                                class="relative rounded-md bg-slate-50 after:absolute after:border-l-2 after:left-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500">
                                <td class="px-3.5 py-2.5"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                </td>
                                <td class="px-3.5 py-2.5">Tailwick</td>
                                <td class="px-3.5 py-2.5">Maritza Blanda</td>
                                <td class="px-3.5 py-2.5">$4,521</td>
                                <td class="px-3.5 py-2.5"><a href="#!"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                            class="ri-download-2-line"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->

        <div>
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Card Table</h6>

                    <div class="-mx-5 -mb-5 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="ltr:text-left rtl:text-right ">
                                <tr>
                                    <th
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                        Order ID</th>
                                    <th
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                        Shop</th>
                                    <th
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                        Customer</th>
                                    <th
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                        Price</th>
                                    <th
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        <a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#541254265</a>
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        Amezon</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        Cleo Carson</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        $4,521</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        <a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                                class="ri-download-2-line"></i></a></td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        <a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#744145235</a>
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        Shoppers</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        Juston Eichmann</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        $7,546</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        <a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                                class="ri-download-2-line"></i></a></td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        <a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#9855126598</a>
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        Flipkart</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        Bettie Johson</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        $1,350</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        <a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                                class="ri-download-2-line"></i></a></td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        <a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#847512653</a>
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        Tailwick</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        Maritza Blanda</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        $4,521</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                        <a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i
                                                class="ri-download-2-line"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--end card-->
        </div>
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
