@extends('layouts.master')
@section('title')
    {{ __('Notes') }}
@endsection
@push('css')
    <script src="{{ URL::asset('build/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/common.js') }}"></script>
@endpush
@section('content')
    <!-- page title -->
    <x-page-title title="Notes" pagetitle="Apps" />

    <div class="card">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                <div class="xl:col-span-4">
                    <ul class="flex flex-wrap w-full gap-2 text-sm font-medium text-center filter-btns grow"
                        data-filter-target="notes-list">
                        <li>
                            <a href="javascript:void(0);" data-filter="all"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear active rounded-md text-slate-500 border border-transparent [&.active]:bg-custom-500 dar:[&.active]:bg-custom-500 [&.active]:text-white hover:text-custom-500 active:text-custom-500 -mb-[1px]">All</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-filter="business"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 border border-transparent [&.active]:bg-custom-500 dar:[&.active]:bg-custom-500 [&.active]:text-white hover:text-custom-500 active:text-custom-500 -mb-[1px]">Business</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-filter="social"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 border border-transparent [&.active]:bg-custom-500 dar:[&.active]:bg-custom-500 [&.active]:text-white hover:text-custom-500 active:text-custom-500 -mb-[1px]">Social</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-filter="home"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 border border-transparent [&.active]:bg-custom-500 dar:[&.active]:bg-custom-500 [&.active]:text-white hover:text-custom-500 active:text-custom-500 -mb-[1px]">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-filter="personal"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 border border-transparent [&.active]:bg-custom-500 dar:[&.active]:bg-custom-500 [&.active]:text-white hover:text-custom-500 active:text-custom-500 -mb-[1px]">Personal</a>
                        </li>
                    </ul>
                </div>

                <div class="xl:col-start-10 xl:col-span-3">
                    <div class="flex gap-3">
                        <div class="relative grow">
                            <input type="text"
                                class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                placeholder="Search for ..." autocomplete="off">
                            <i data-lucide="search"
                                class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 fill-slate-100"></i>
                        </div>
                        <div class="shrink-0">
                            <button data-modal-target="addNotesModal" type="button"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100"><i
                                    data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                                    Note</span></button>
                        </div>
                    </div>
                </div><!--end col-->

            </div>
        </div>
    </div><!--end card-->

    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4" id="notes-list">
    </div><!--end grid-->

    <div class="flex flex-col items-center gap-5 mb-5 md:flex-row" id="paginationItems">
        <div class="grow">
            <p class="text-slate-500">Showing <b>8</b> of <b>44</b> Results</p>
        </div>
        <ul class="flex flex-wrap items-center gap-2">
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                        class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">2</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">3</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                        class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
            </li>
        </ul>
    </div>

    <div id="addNotesModal" modal-center aria-labelledby="addNewNoteLabel"
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen xl:w-[55rem] bg-white shadow rounded-md">
            <div class="flex items-center justify-between p-5 border-b">
                <h5 class="text-16" id="addNewNoteLabel">Add Note</h5>
                <button data-modal-close="addNotesModal" id="notesModal-close"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-5">
                <form novalidate class="create-form">
                    <input type="hidden" value="" name="id" id="id">
                    <input type="hidden" value="add" name="action" id="action">
                    <input type="hidden" id="id-field">
                    <div id="alert-error-msg"
                        class="hidden px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50">
                    </div>
                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                        <div class="xl:col-span-4">
                            <label for="createDateInput" class="inline-block mb-2 text-base font-medium">Create Date</label>
                            <input type="date" id="createDateInput"
                                class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y">
                        </div>
                        <div class="xl:col-span-4">
                            <label for="notesTitleInput" class="inline-block mb-2 text-base font-medium">Note
                                Title</label>
                            <input type="text" id="notesTitleInput"
                                class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                placeholder="Title" required>
                        </div>
                        <div class="xl:col-span-4">
                            <div>
                                <label for="categorySelect"
                                    class="inline-block mb-2 text-base font-medium">Category</label>
                                <select
                                    class="form-select border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                    data-choices data-choices-search-false name="categorySelect" id="statusSelect">
                                    <option value="">Select Category</option>
                                    <option value="business">Business</option>
                                    <option value="personal">Personal</option>
                                    <option value="home">Home</option>
                                    <option value="social">Social</option>
                                </select>
                            </div>
                        </div>
                        <div class="xl:col-span-12">
                            <div>
                                <label for="textArea" class="inline-block mb-2 text-base font-medium">Description</label>
                                <textarea
                                    class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                    id="textArea" rows="6"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addNotesModal"
                            class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100">Cancel</button>
                        <button type="submit" id="addNew"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Add
                            Note</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end add user-->

    <div id="overviewNotesModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen xl:w-[35rem] bg-white shadow rounded-md">
            <div class="flex items-center justify-between p-5 border-b">
                <div class="flex items-center gap-2">
                    <div class="relative dropdown">
                        <button
                            class="size-4 mt-1 border border-dashed rounded-full dropdown-toggle shrink-0 bg-sky-100 border-sky-500"
                            id="notesAction1" data-bs-toggle="dropdown"></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                            aria-labelledby="notesAction1">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">Personal</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">Business</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">Social</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                    href="#!">Home</a>
                            </li>
                        </ul>
                    </div>
                    <h5 class="text-16">Weekend Plan</h5>
                </div>
                <button data-modal-close="overviewNotesModal"
                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                        data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-5">
                <div class="flex items-center gap-2 mb-4">
                    <h6 class="text-sm font-normal grow"><i data-lucide="user-2"
                            class="inline-block size-4 mr-1 align-middle text-slate-500 fill-slate-200"></i>
                        <span class="align-middle">Admin</span>
                    </h6>
                    <h6 class="text-sm font-normal shrink-0"><i data-lucide="calendar"
                            class="inline-block size-4 mr-1 align-middle text-slate-500 fill-slate-200"></i>
                        <span class="align-middle">21 Sept, 2023</span>
                    </h6>
                </div>
                <p class="mb-2 text-slate-500">Every vacation has its own special vibe and it all starts
                    with where you stay.</p>
                <p class="mb-2 text-slate-500"> We present you with an ever growing exclusive collection
                    of private residences, meticulously hand picked and personally inspected to the tee to fit almost every
                    interest in popular travel destinations. These residences are aided with a Pre Rental Advisor with first
                    hand knowledge of these properties and their surrounding.</p>
                <p class="text-slate-500">Local people define a holiday, are principally warm, caring,
                    ethical and well-intentioned. All this a mere phone call or click away, backed by the expertise of a
                    decade old reputed company, inspiring you to live life's best moments more easily and often than you
                    ever thought possible.</p>
                <div class="flex justify-end gap-2 mt-4">
                    <button data-modal-close="overviewNotesModal"
                        class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100">Cancel</button>
                    <button data-modal-target="addNotesModal" data-modal-close="overviewNotesModal"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Edit
                        Note</button>
                </div>
            </div>
        </div>
    </div><!--end add user-->

    <div id="deleteModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal" id="close-removeNotesModal"
                        class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                            data-lucide="x" class="size-5"></i></button>
                </div>
                <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500">Are you certain you want to delete this record?</p>
                    <div class="flex justify-center gap-2 mt-6">
                        <button type="button" data-modal-close="deleteModal"
                            class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100">Cancel</button>
                        <button type="button" id="remove-notes"
                            class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100">Yes,
                            Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/libs/read-smore/index.umd.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/apps-notes.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
