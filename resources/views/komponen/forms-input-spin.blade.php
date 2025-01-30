@extends('layouts.master')
@section('title')
    {{ __('Input Spin') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Input Spin" pagetitle="Forms" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-1">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic Example</h6>
                <div class="flex flex-wrap gap-4">
                    <div class="inline-flex p-2 text-center border rounded input-step border-slate-200">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-slate-200 rounded transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="50" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear border rounded border-slate-200 bg-slate-200 w-7 plusBtn text-slate-500 hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div
                        class="inline-flex p-2 text-center border rounded input-step border-slate-200">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-custom-200 rounded transition-all duration-200 ease-linear border-custom-200 text-custom-500  hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="19" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear border rounded border-custom-200 bg-custom-200 w-7 plusBtn text-custom-500 hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div
                        class="inline-flex p-2 text-center border rounded input-step border-slate-200">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-green-200 rounded transition-all duration-200 ease-linear border-green-200 text-green-500 hover:bg-green-500 hover:text-green-50 hover:border-green-500 focus:bg-green-500 focus:border-green-500 focus:text-green-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="33" min="0" max="100" readonly>
                        <button type="button"
                            class="text-green-500 transition-all duration-200 ease-linear bg-green-200 border border-green-200 rounded w-7 plusBtn hover:bg-green-500 hover:text-green-50 hover:border-green-500 focus:bg-green-500 focus:border-green-500 focus:text-green-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div
                        class="inline-flex p-2 text-center border rounded input-step border-slate-200">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-orange-200 rounded transition-all duration-200 ease-linear border-orange-200 text-orange-500 hover:bg-orange-500 hover:text-orange-50 hover:border-orange-500 focus:bg-orange-500 focus:border-orange-500 focus:text-orange-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="10" min="0" max="100" readonly>
                        <button type="button"
                            class="text-orange-500 transition-all duration-200 ease-linear bg-orange-200 border-orange-200 rounded w-7 plusBtn hover:bg-orange-500 hover:text-orange-50 hover:border-orange-500 focus:bg-orange-500 focus:border-orange-500 focus:text-orange-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div
                        class="inline-flex p-2 text-center border rounded input-step border-slate-200">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-sky-200 rounded transition-all duration-200 ease-linear border-sky-200 text-sky-500 hover:bg-sky-500 hover:text-sky-50 hover:border-sky-500 focus:bg-sky-500 focus:border-sky-500 focus:text-sky-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="25" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear border rounded text-sky-500 bg-sky-200 border-sky-200 w-7 plusBtn hover:bg-sky-500 hover:text-sky-50 hover:border-sky-500 focus:bg-sky-500 focus:border-sky-500 focus:text-sky-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div
                        class="inline-flex p-2 text-center border rounded input-step border-slate-200">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-yellow-200 rounded transition-all duration-200 ease-linear border-yellow-200 text-yellow-500 hover:bg-yellow-500 hover:text-yellow-50 hover:border-yellow-500 focus:bg-yellow-500 focus:border-yellow-500 focus:text-yellow-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="10" min="0" max="100" readonly>
                        <button type="button"
                            class="text-yellow-500 transition-all duration-200 ease-linear bg-yellow-200 border border-yellow-200 rounded w-7 plusBtn hover:bg-yellow-500 hover:text-yellow-50 hover:border-yellow-500 focus:bg-yellow-500 focus:border-yellow-500 focus:text-yellow-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div
                        class="inline-flex p-2 text-center border rounded input-step border-slate-200">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-red-200 rounded transition-all duration-200 ease-linear border-red-200 text-red-500 hover:bg-red-500 hover:text-red-50 hover:border-red-500 focus:bg-red-500 focus:border-red-500 focus:text-red-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="18" min="0" max="100" readonly>
                        <button type="button"
                            class="text-red-500 transition-all duration-200 ease-linear bg-red-200 border border-red-200 rounded w-7 plusBtn hover:bg-red-500 hover:text-red-50 hover:border-red-500 focus:bg-red-500 focus:border-red-500 focus:text-red-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div
                        class="inline-flex p-2 text-center border rounded input-step border-slate-200">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-purple-200 rounded transition-all duration-200 ease-linear border-purple-200 text-purple-500 hover:bg-purple-500 hover:text-purple-50 hover:border-purple-500 focus:bg-purple-500 dar:focus:bg-purple-500 focus:border-purple-500 focus:text-purple-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="18" min="0" max="100" readonly>
                        <button type="button"
                            class="text-purple-500 transition-all duration-200 ease-linear bg-purple-200 border border-purple-200 rounded w-7 plusBtn hover:bg-purple-500 hover:text-purple-50 hover:border-purple-500 focus:bg-purple-500 dar:focus:bg-purple-500 focus:border-purple-500 focus:text-purple-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Group Input Spin Example</h6>
                <div class="flex flex-wrap gap-4">
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="10" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-green-500 hover:text-green-50 hover:border-green-500 focus:bg-green-500 focus:border-green-500 focus:text-green-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="20" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 hover:bg-green-500 hover:text-green-50 hover:border-green-500 focus:bg-green-500 focus:border-green-500 focus:text-green-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-orange-500 hover:text-orange-50 hover:border-orange-500 focus:bg-orange-500 focus:border-orange-500 focus:text-orange-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="30" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 hover:bg-orange-500 hover:text-orange-50 hover:border-orange-500 focus:bg-orange-500 focus:border-orange-500 focus:text-orange-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-sky-500 hover:text-sky-50 hover:border-sky-500 focus:bg-sky-500 dar:focus:bg-sky-500 focus:border-sky-500 focus:text-sky-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="30" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 hover:bg-sky-500 hover:text-sky-50 hover:border-sky-500 focus:bg-sky-500 dar:focus:bg-sky-500 focus:border-sky-500 focus:text-sky-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-yellow-500 hover:text-yellow-50 hover:border-yellow-500 focus:bg-yellow-500 focus:border-yellow-500 focus:text-yellow-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="40" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 hover:bg-yellow-500 hover:text-yellow-50 hover:border-yellow-500 focus:bg-yellow-500 focus:border-yellow-500 focus:text-yellow-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-red-500 hover:text-red-50 hover:border-red-500 focus:bg-red-500 focus:border-red-500 focus:text-red-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="45" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 hover:bg-red-500 hover:text-red-50 hover:border-red-500 focus:bg-red-500 focus:border-red-500 focus:text-red-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-purple-500 hover:text-purple-50 hover:border-purple-500 focus:bg-purple-500 focus:border-purple-500 focus:text-purple-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="34" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 hover:bg-purple-500 hover:text-purple-50 hover:border-purple-500 focus:bg-purple-500 focus:border-purple-500 focus:text-purple-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-slate-500 hover:text-slate-50 hover:border-slate-500 focus:bg-slate-500 focus:border-slate-500 focus:text-slate-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="55" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 hover:bg-slate-500 hover:text-slate-50 hover:border-slate-500 focus:bg-slate-500 focus:border-slate-500 focus:text-slate-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Rounded Example</h6>
                <div class="flex flex-wrap items-center gap-4">
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-slate-200 rounded-full transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="50" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear border rounded-full border-slate-200 bg-slate-200 w-7 plusBtn text-slate-500 hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-custom-200 rounded-full transition-all duration-200 ease-linear border-custom-200 text-custom-500  hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="19" min="0" max="100" readonly>
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-custom-200 rounded-full transition-all duration-200 ease-linear border-custom-200 text-custom-500  hover:bg-custom-500 hover:text-custom-50 hover:border-custom-500 focus:bg-custom-500 focus:border-custom-500 focus:text-custom-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-green-200 rounded-full transition-all duration-200 ease-linear border-green-200 text-green-500 hover:bg-green-500 hover:text-green-50 hover:border-green-500 focus:bg-green-500 focus:border-green-500 focus:text-green-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="33" min="0" max="100" readonly>
                        <button type="button"
                            class="text-green-500 transition-all duration-200 ease-linear bg-green-200 border border-green-200 rounded-full w-7 plusBtn hover:bg-green-500 hover:text-green-50 hover:border-green-500 focus:bg-green-500 focus:border-green-500 focus:text-green-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border w-7 leading-[15px] minusBtn bg-orange-200 rounded-full transition-all duration-200 ease-linear border-orange-200 text-orange-500 hover:bg-orange-500 hover:text-orange-50 hover:border-orange-500 focus:bg-orange-500 focus:border-orange-500 focus:text-orange-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 product-quantity focus:shadow-none"
                            value="10" min="0" max="100" readonly>
                        <button type="button"
                            class="text-orange-500 transition-all duration-200 ease-linear bg-orange-200 border-orange-200 rounded-full w-7 plusBtn hover:bg-orange-500 hover:text-orange-50 hover:border-orange-500 focus:bg-orange-500 focus:border-orange-500 focus:text-orange-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l-full rtl:rounded-r-full transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-yellow-500 hover:text-yellow-50 hover:border-yellow-500 focus:bg-yellow-500 focus:border-yellow-500 focus:text-yellow-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="40" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r-full rtl:rounded-l-full size-9 border-slate-200 plusBtn text-slate-500 hover:bg-yellow-500 hover:text-yellow-50 hover:border-yellow-500 focus:bg-yellow-500 focus:border-yellow-500 focus:text-yellow-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l-full rtl:rounded-r-full transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-red-500 hover:text-red-50 hover:border-red-500 focus:bg-red-500 focus:border-red-500 focus:text-red-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="45" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r-full rtl:rounded-l-full size-9 border-slate-200 plusBtn text-slate-500 hover:bg-red-500 hover:text-red-50 hover:border-red-500 focus:bg-red-500 focus:border-red-500 focus:text-red-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l-full rtl:rounded-r-full transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-purple-500 hover:text-purple-50 hover:border-purple-500 focus:bg-purple-500 focus:border-purple-500 focus:text-purple-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="34" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r-full rtl:rounded-l-full size-9 border-slate-200 plusBtn text-slate-500 hover:bg-purple-500 hover:text-purple-50 hover:border-purple-500 focus:bg-purple-500 focus:border-purple-500 focus:text-purple-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                    <div class="inline-flex text-center input-step">
                        <button type="button"
                            class="border size-9 leading-[15px] minusBtn bg-white ltr:rounded-l-full rtl:rounded-r-full transition-all duration-200 ease-linear border-slate-200 text-slate-500 hover:bg-slate-500 hover:text-slate-50 hover:border-slate-500 focus:bg-slate-500 focus:border-slate-500 focus:text-slate-50"><i
                                data-lucide="minus" class="inline-block size-4"></i></button>
                        <input type="number"
                            class="w-12 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity focus:shadow-none"
                            value="55" min="0" max="100" readonly>
                        <button type="button"
                            class="transition-all duration-200 ease-linear bg-white border ltr:rounded-r-full rtl:rounded-l-full size-9 border-slate-200 plusBtn text-slate-500 hover:bg-slate-500 hover:text-slate-50 hover:border-slate-500 focus:bg-slate-500 focus:border-slate-500 focus:text-slate-50"><i
                                data-lucide="plus" class="inline-block size-4"></i></button>
                    </div>
                </div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/js/pages/form-input-spine.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
