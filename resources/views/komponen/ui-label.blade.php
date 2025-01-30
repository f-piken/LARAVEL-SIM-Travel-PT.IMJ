@extends('layouts.master')
@section('title')
    {{ __('Label') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Label" pagetitle="UI Elements" />

    <div>
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Default Badge</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-custom-100 border-transparent text-custom-500">Custom</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500">Green</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500">Orange</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-sky-100 border-transparent text-sky-500">Sky</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500">Yellow</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-transparent text-red-500">Red</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-purple-100 border-transparent text-purple-500">Purple</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500">Slate</span>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Outline Badge</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-custom-400 text-custom-500">Custom</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-green-400 text-green-500">Green</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-orange-400 text-orange-500">Orange</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-sky-400 text-sky-500">Sky</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-yellow-400 text-yellow-500">Yellow</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-red-400 text-red-500">Red</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-purple-400 text-purple-500">Purple</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-slate-400 text-slate-500">Slate</span>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Bordered Badge</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-custom-100 border-custom-200 text-custom-500">Custom</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500">Green</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-orange-100 border-orange-200 text-orange-500">Orange</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-sky-100 border-sky-200 text-sky-500">Sky</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-yellow-100 border-yellow-200 text-yellow-500">Yellow</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-red-100 border-red-200 text-red-500">Red</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-purple-100 border-purple-200 text-purple-500">Purple</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500">Slate</span>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Soft Outline Badge</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-custom-100 text-custom-500">Custom</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-green-100 text-green-500">Green</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-orange-100 text-orange-500">Orange</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-sky-100 text-sky-500">Sky</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-yellow-100 text-yellow-500">Yellow</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-red-100 text-red-500">Red</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-purple-100 text-purple-500">Purple</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-slate-100 text-slate-500">Slate</span>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Pills Badge</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded-full border bg-custom-100 border-transparent text-custom-500">Custom</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded-full border bg-green-100 border-transparent text-green-500">Green</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded-full border bg-orange-100 border-transparent text-orange-500">Orange</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded-full border bg-sky-100 border-transparent text-sky-500">Sky</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded-full border bg-yellow-100 border-transparent text-yellow-500">Yellow</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded-full border bg-red-100 border-transparent text-red-500">Red</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded-full border bg-purple-100 border-transparent text-purple-500">Purple</span>
                        <span
                            class="px-2.5 py-0.5 inline-block text-xs font-medium rounded-full border bg-slate-100 border-transparent text-slate-500">Slate</span>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Pills Outline Badge</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded-full border bg-white border-custom-400 text-custom-500">Custom</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded-full border bg-white border-green-400 text-green-500">Green</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded-full border bg-white border-orange-400 text-orange-500">Orange</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded-full border bg-white border-sky-400 text-sky-500">Sky</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded-full border bg-white border-yellow-400 text-yellow-500">Yellow</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded-full border bg-white border-red-400 text-red-500">Red</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded-full border bg-white border-purple-400 text-purple-500">Purple</span>
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded-full border bg-white border-slate-400 text-slate-500">Slate</span>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Dismissible Badges</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-custom-100 border-transparent text-custom-500">Custom
                            <a href="#!" class="transition text-custom-400 hover:text-custom-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500">Green
                            <a href="#!" class="text-green-400 transition hover:text-green-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500">Orange
                            <a href="#!" class="text-orange-400 transition hover:text-orange-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-sky-100 border-transparent text-sky-500">Sky
                            <a href="#!" class="transition text-sky-400 hover:text-sky-600 "><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500">Yellow
                            <a href="#!" class="text-yellow-400 transition hover:text-yellow-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-red-100 border-transparent text-red-500">Red
                            <a href="#!" class="text-red-400 transition hover:text-red-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-purple-100 border-transparent text-purple-500">Purple
                            <a href="#!" class="text-purple-400 transition hover:text-purple-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500">Slate
                            <a href="#!" class="transition text-slate-400 hover:text-slate-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Dismissible Outline Badge</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-custom-400 text-custom-500">Custom
                            <a href="#!" class="transition text-custom-400 hover:text-custom-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-green-400 text-green-500">Green<a
                                href="#!" class="text-green-400 transition hover:text-green-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-orange-400 text-orange-500">Orange
                            <a href="#!" class="text-orange-400 transition hover:text-orange-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-sky-400 text-sky-500">Sky
                            <a href="#!" class="transition text-sky-400 hover:text-sky-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-yellow-400 text-yellow-500">Yellow
                            <a href="#!" class="text-yellow-400 transition hover:text-yellow-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-red-400 text-red-500">Red
                            <a href="#!" class="text-red-400 transition hover:text-red-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-purple-400 text-purple-500">Purple
                            <a href="#!" class="text-purple-400 transition hover:text-purple-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-400 text-slate-500">Slate
                            <a href="#!" class="transition text-slate-400 hover:text-slate-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Fill Badges</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border bg-custom-500 border-custom-500 text-custom-50">Custom</span>
                        <span
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border bg-green-500 border-green-500 text-green-50">Green</span>
                        <span
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border bg-orange-500 border-orange-500 text-orange-50">Orange</span>
                        <span
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border bg-sky-500 border-sky-500 text-sky-50">Sky</span>
                        <span
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border bg-yellow-500 border-yellow-500 text-yellow-50">Yellow</span>
                        <span
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border bg-red-500 border-red-500 text-red-50">Red</span>
                        <span
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border bg-purple-500 border-purple-500 text-purple-50">Purple</span>
                        <span
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border bg-slate-500 border-slate-500 text-slate-50">Slate</span>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Dismissible Outline Badge</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full border bg-white border-custom-400 text-custom-500">Custom
                            <a href="#!" class="transition text-custom-400 hover:text-custom-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full border bg-white border-green-400 text-green-500">Green<a
                                href="#!" class="text-green-400 transition hover:text-green-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full border bg-white border-orange-400 text-orange-500">Orange
                            <a href="#!" class="text-orange-400 transition hover:text-orange-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full border bg-white border-sky-400 text-sky-500">Sky
                            <a href="#!" class="transition text-sky-400 hover:text-sky-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full border bg-white border-yellow-400 text-yellow-500">Yellow
                            <a href="#!" class="text-yellow-400 transition hover:text-yellow-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full border bg-white border-red-400 text-red-500">Red
                            <a href="#!" class="text-red-400 transition hover:text-red-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full border bg-white border-purple-400 text-purple-500">Purple
                            <a href="#!" class="text-purple-400 transition hover:text-purple-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full border bg-white border-slate-400 text-slate-500">Slate
                            <a href="#!" class="transition text-slate-400 hover:text-slate-600"><i data-lucide="x"
                                    class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Badge with Icon</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-custom-100 border-transparent text-custom-500"><i
                                data-lucide="frown" class="size-3 ltr:mr-1 rtl:ml-1"></i> Custom</span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500"><i
                                data-lucide="frown" class="size-3 ltr:mr-1 rtl:ml-1"></i> Green</span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500"><i
                                data-lucide="frown" class="size-3 ltr:mr-1 rtl:ml-1"></i> Orange</span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-sky-100 border-transparent text-sky-500"><i
                                data-lucide="frown" class="size-3 ltr:mr-1 rtl:ml-1"></i> Sky</span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500"><i
                                data-lucide="frown" class="size-3 ltr:mr-1 rtl:ml-1"></i> Yellow</span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-red-100 border-transparent text-red-500"><i
                                data-lucide="frown" class="size-3 ltr:mr-1 rtl:ml-1"></i> Red</span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-purple-100 border-transparent text-purple-500"><i
                                data-lucide="frown" class="size-3 ltr:mr-1 rtl:ml-1"></i> Purple</span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500"><i
                                data-lucide="frown" class="size-3 ltr:mr-1 rtl:ml-1"></i> Slate</span>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Badge with Indicator</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-custom-400 text-custom-500">
                            <span class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full inline-block bg-custom-500"></span>
                            Custom
                        </span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-green-400 text-green-500">
                            <span class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full inline-block bg-green-500"></span>
                            Green
                        </span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full border bg-white border-orange-400 text-orange-500">
                            <span class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full inline-block bg-orange-500"></span>
                            Orange
                        </span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-sky-400 text-sky-500">
                            <span class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full inline-block bg-sky-500"></span> Sky
                        </span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-yellow-400 text-yellow-500">
                            <span class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full inline-block bg-yellow-500"></span>
                            Yellow
                        </span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-red-400 text-red-500">
                            <span class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full inline-block bg-red-500"></span> Red
                        </span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-purple-400 text-purple-500">
                            <span class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full inline-block bg-purple-500"></span>
                            Purple
                        </span>
                        <span
                            class="flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-400 text-slate-500">
                            <span class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full inline-block bg-slate-500"></span>
                            Slate
                        </span>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Badge with Icon Only</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="flex items-center justify-center size-8 text-xs font-medium border border-transparent rounded bg-custom-100 text-custom-500"><i
                                data-lucide="gift" class="size-3"></i></span>
                        <span
                            class="flex items-center justify-center size-8 text-xs font-medium text-green-500 bg-green-100 border border-transparent rounded-full"><i
                                data-lucide="gift" class="size-3"></i></span>
                        <span
                            class="flex items-center justify-center size-8 text-xs font-medium text-orange-500 bg-white border border-transparent rounded"><i
                                data-lucide="gift" class="size-3"></i></span>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Badge with Button</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <button type="button"
                            class="relative flex items-center justify-center text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                            Custom Button
                            <span
                                class="flex items-center justify-center size-5 ltr:ml-2 rtl:mr-2 text-[10px] shrink-0 font-medium border rounded-full bg-custom-400 border-custom-400">15</span>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center size-[37.5px] relative p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                            <span
                                class="absolute flex items-center justify-center size-5 text-[11px] font-medium bg-red-400 border border-red-400 rounded-full ltr:-right-2 rtl:-left-4 -top-2">8</span>
                            <i data-lucide="mail" class="size-4"></i>
                        </button>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Badges as Links</h6>
                    <div class="flex flex-wrap items-center gap-2">
                        <a href="#!"
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-custom-100 border-transparent text-custom-500 hover:bg-custom-200">Custom</a>
                        <a href="#!"
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-green-100 border-transparent text-green-500 hover:bg-green-200">Green</a>
                        <a href="#!"
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-orange-100 border-transparent text-orange-500 hover:bg-orange-200">Orange</a>
                        <a href="#!"
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-sky-100 border-transparent text-sky-500 hover:bg-sky-200">Sky</a>
                        <a href="#!"
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-yellow-100 border-transparent text-yellow-500 hover:bg-yellow-200 ">Yellow</a>
                        <a href="#!"
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-red-100 border-transparent text-red-500 hover:bg-red-200">Red</a>
                        <a href="#!"
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-purple-100 border-transparent text-purple-500 hover:bg-purple-200">Purple</a>
                        <a href="#!"
                            class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-slate-100 border-transparent text-slate-500 hover:bg-slate-200">Slate</a>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
