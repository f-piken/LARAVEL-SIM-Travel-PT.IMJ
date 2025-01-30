@extends('layouts.master')
@section('title')
    {{ __('Departments') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Departments" pagetitle="HR Management" />

    <div class="card" id="ordersTable">
        <div class="card-body">
            <div class="flex items-center gap-3 mb-4">
                <h6 class="text-15 grow">Departments</h6>
                <div class="shrink-0">
                    <a href="#!" data-modal-target="addDepartmentModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100"><i
                            data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                            Department</span></a>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200">#</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Department
                                Name</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Head of
                                Dep.</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Phone
                                Number</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Email</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Employee
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200">1</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">Web Development</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">Patricia Garcia</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">077 7317 7572</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">
                                PatriciaJGarcia@tailwick.com</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">15</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addDepartmentModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200">2</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">IOS Application
                                Development</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">Jonas Frederiksen</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">61 53 62 05</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">jonas@tailwick.com</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">09</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addDepartmentModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200">3</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">Designing</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">Juliette Fecteau</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">07231 96 25 88</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">
                                JulietteFecteau@tailwick.com</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">11</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addDepartmentModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200">4</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">HR Management</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">Thomas Hatfield</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">0911 47 65 49</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">thomas@tailwick.com</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">03</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addDepartmentModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200">5</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">Accounts Management</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">Holly Kavanaugh</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">819 947 5846</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">
                                HollyKavanaugh@tailwick.com</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">02</td>
                            <td class="px-3.5 py-2.5 border border-slate-200">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addDepartmentModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col items-center mt-5 md:flex-row">
                <div class="mb-4 grow md:mb-0">
                    <p class="text-slate-500">Showing <b>5</b> of <b>8</b> Results</p>
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
    </div>


    <div id="addDepartmentModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md">
            <div class="flex items-center justify-between p-4 border-b">
                <h5 class="text-16">Add Department</h5>
                <button data-modal-close="addDepartmentModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="departmentInput" class="inline-block mb-2 text-base font-medium">Department
                                Name</label>
                            <input type="text" id="departmentInput"
                                class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                placeholder="Department name">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="headOfInput" class="inline-block mb-2 text-base font-medium">Head of Dep.
                                Name</label>
                            <input type="text" id="headOfInput"
                                class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                placeholder="Head name">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="phoneNumberInput" class="inline-block mb-2 text-base font-medium">Phone
                                Number</label>
                            <input type="number" id="phoneNumberInput"
                                class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                placeholder="(012) 1234 562 3145">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="emailInput" class="inline-block mb-2 text-base font-medium">Email</label>
                            <input type="text" id="emailInput"
                                class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                placeholder="Enter email">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="employeeNumberInput" class="inline-block mb-2 text-base font-medium">Total
                                Employee</label>
                            <input type="number" id="employeeNumberInput"
                                class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                placeholder="0">
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addDepartmentModal"
                            class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100">Cancel</button>
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Add
                            Department</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end add holiday-->

    <div id="deleteModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal"
                        class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                            data-lucide="x" class="size-5"></i></button>
                </div>
                <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500">Are you certain you want to delete this record?</p>
                    <div class="flex justify-center gap-2 mt-6">
                        <button type="reset" data-modal-close="deleteModal"
                            class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100">Cancel</button>
                        <button type="submit"
                            class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100">Yes,
                            Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end delete modal-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
