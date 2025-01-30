@extends('layouts.master')
@section('title')
    {{ __('Timeline') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Timeline" pagetitle="UI Elements" />

    <div class="grid grid-cols-1 gap-x-4 xl:grid-cols-3">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Circle Timeline</h6>
                <div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Invitation Sent</h6>
                        <p class="mb-2 text-slate-400">No candidate reply</p>
                        <p class="text-sm text-slate-400">02 Aug, 2023</p>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Sent to reminder to candidate</h6>
                        <p class="mb-2 text-slate-500">Preview message sent</p>
                        <p class="text-sm text-slate-500">15 Aug, 2023</p>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Scheduled</h6>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5">
                        <h6 class="mb-4 text-15">Interview Done</h6>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Square Timeline</h6>
                <div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-sm ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Invitation Sent</h6>
                        <p class="mb-2 text-slate-500">No candidate reply</p>
                        <p class="text-sm text-slate-500">02 Aug, 2023</p>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-sm ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Sent to reminder to candidate</h6>
                        <p class="mb-2 text-slate-500">Preview message sent</p>
                        <p class="text-sm text-slate-500">15 Aug, 2023</p>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-sm ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Scheduled</h6>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 after:absolute after:size-2 after:bg-custom-500 after:rounded-sm ltr:after:left-0 rtl:after:right-0 after:top-1.5">
                        <h6 class="mb-4 text-15">Interview Done</h6>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Progress Timeline</h6>
                <div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r rtl:before:right-[.22rem] before:border-custom-500 before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Invitation Sent</h6>
                        <p class="mb-2 text-slate-500">No candidate reply</p>
                        <p class="text-sm text-slate-500">02 Aug, 2023</p>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r rtl:before:right-[.22rem] before:border-custom-500 before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Sent to reminder to candidate</h6>
                        <p class="mb-2 text-slate-500">Preview message sent</p>
                        <p class="text-sm text-slate-500">15 Aug, 2023</p>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Scheduled</h6>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 after:absolute after:size-2 after:bg-white after:border after:border-slate-200 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5">
                        <h6 class="mb-4 text-15">Interview Done</h6>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Outline Timeline</h6>
                <div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-white after:border after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Invitation Sent</h6>
                        <p class="mb-2 text-slate-500">No candidate reply</p>
                        <p class="text-sm text-slate-500">02 Aug, 2023</p>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-white after:border after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Sent to reminder to candidate</h6>
                        <p class="mb-2 text-slate-500">Preview message sent</p>
                        <p class="text-sm text-slate-500">15 Aug, 2023</p>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-white after:border after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4">
                        <h6 class="mb-4 text-15">Scheduled</h6>
                    </div>
                    <div
                        class="relative ltr:pl-6 rtl:pr-6 after:absolute after:size-2 after:bg-white after:border-slate-200 after:border after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5">
                        <h6 class="mb-4 text-15">Interview Done</h6>
                    </div>
                </div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->

    <h5 class="mb-5 underline">Timeline With Avatar</h5>

    <div class="grid grid-cols-1 gap-x-4 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Timeline with Avatar</h6>
                <div>
                    <div
                        class="relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4">
                        <div class="relative flex gap-2">
                            <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                class="size-8 p-0.5 bg-white border rounded-full shrink-0 border-slate-200">
                            <div>
                                <h6 class="mb-1">Purchased by James Price</h6>
                                <p class="mb-2 text-slate-500">Product noise evolve smartwatch</p>
                                <p class="text-sm text-slate-500">05:57 AM Today</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4">
                        <div class="relative flex gap-2">
                            <img src="{{ URL::asset('build/images/users/avatar-2.png') }}" alt=""
                                class="size-8 p-0.5 bg-white border rounded-full shrink-0 border-slate-200">
                            <div>
                                <h6 class="mb-1">Natasha Carey have liked the products</h6>
                                <p class="mb-2 text-slate-500">Allow users to like products in your
                                    WooCommerce store.</p>
                                <p class="text-sm text-slate-500">25 Dec, 2023</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4">
                        <div class="relative flex gap-2">
                            <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                                class="size-8 p-0.5 bg-white border rounded-full shrink-0 border-slate-200">
                            <div>
                                <h6 class="mb-1">Today offers by Digitech Galaxy</h6>
                                <p class="mb-2 text-slate-500">Offer is valid on orders of $230 Or above
                                    for selected products only.</p>
                                <p class="text-sm text-slate-500">12 Dec, 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="relative flex gap-2">
                            <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                                class="size-8 p-0.5 bg-white border rounded-full shrink-0 border-slate-200">
                            <div>
                                <h6 class="mb-1">New ticket received</h6>
                                <p class="mb-2 text-slate-500">User <a href="#!"
                                        class="text-custom-500">Erica245</a> submitted a ticket</p>
                                <p class="text-sm text-slate-500">26 Dec, 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Timeline with Icon</h6>
                <div>
                    <div
                        class="relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4">
                        <div class="relative flex gap-2">
                            <div
                                class="size-8 p-0.5 bg-white text-custom-500 flex items-center justify-center border rounded-full shrink-0 border-slate-200">
                                <i data-lucide="bar-chart-horizontal-big" class="size-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Purchased by James Price</h6>
                                <p class="mb-2 text-slate-500">Product noise evolve smartwatch</p>
                                <p class="text-sm text-slate-500">05:57 AM Today</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4">
                        <div class="relative flex gap-2">
                            <div
                                class="size-8 p-0.5 bg-white text-red-500 flex items-center justify-center border rounded-full shrink-0 border-slate-200">
                                <i data-lucide="store" class="size-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Natasha Carey have liked the products</h6>
                                <p class="mb-2 text-slate-500">Allow users to like products in your
                                    WooCommerce store.</p>
                                <p class="text-sm text-slate-500">25 Dec, 2023</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4">
                        <div class="relative flex gap-2">
                            <div
                                class="size-8 p-0.5 bg-white text-green-500 flex items-center justify-center border rounded-full shrink-0 border-slate-200">
                                <i data-lucide="shopping-cart" class="size-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Today offers by Digitech Galaxy</h6>
                                <p class="mb-2 text-slate-500">Offer is valid on orders of $230 Or above
                                    for selected products only.</p>
                                <p class="text-sm text-slate-500">12 Dec, 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="relative flex gap-2">
                            <div
                                class="size-8 p-0.5 bg-white text-purple-500 flex items-center justify-center border rounded-full shrink-0 border-slate-200">
                                <i data-lucide="percent" class="size-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">New ticket received</h6>
                                <p class="mb-2 text-slate-500">User <a href="#!"
                                        class="text-custom-500">Erica245</a> submitted a ticket</p>
                                <p class="text-sm text-slate-500">26 Dec, 2023</p>
                            </div>
                        </div>
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
