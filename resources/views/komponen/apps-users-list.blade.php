@extends('layouts.master')
@section('title')
    {{ __('List View') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="List View" pagetitle="Users" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="card" id="usersTable">
                <div class="card-body">
                    <div class="flex items-center">
                        <h6 class="text-15 grow">Users List</h6>
                        <div class="shrink-0">
                            <button data-modal-target="addUserModal" type="button"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100"><i
                                    data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                                    User</span></button>
                        </div>
                    </div>
                </div>
                <div class="!py-3.5 card-body border-y border-dashed border-slate-200">
                    <form action="#!">
                        <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                            <div class="relative xl:col-span-2">
                                <input type="text"
                                    class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                    placeholder="Search for name, email, phone number etc..." autocomplete="off">
                                <i data-lucide="search"
                                    class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 fill-slate-100"></i>
                            </div><!--end col-->
                            <div class="xl:col-span-2">
                                <select
                                    class="form-select border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                    data-choices id="choices-single-default">
                                    <option value="">Select Status</option>
                                    <option value="Verified">Verified</option>
                                    <option value="Waiting">Waiting</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Hidden">Hidden</option>
                                </select>
                            </div><!--end col-->
                            <div class="xl:col-span-3 xl:col-start-10">
                                <div class="flex gap-2 xl:justify-end">
                                    <div>
                                        <button type="button"
                                            class="bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600"><i
                                                data-lucide="download" class="inline-block size-4"></i> <span
                                                class="align-middle">Import</span></button>
                                    </div>
                                    <button
                                        class="flex items-center justify-center size-[37.5px] p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"><i
                                            data-lucide="sliders-horizontal" class="size-4"></i></button>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->
                    </form>
                </div>
                <div class="card-body">
                    <div class="-mx-5 -mb-5 overflow-x-auto">
                        <table class="w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap">
                            <thead class="text-left">
                                <tr
                                    class="relative rounded-md bg-slate-100 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">
                                        <div class="flex items-center h-full">
                                            <input id="CheckboxAll"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="user-id">
                                        User ID</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="name">Name
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="location">
                                        Location</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="email">
                                        Email</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                        data-sort="phone-number">Phone Number</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                        data-sort="joining-date">Joining Date</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="status">
                                        Status</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox1"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500001</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                <img src="{{ URL::asset('build/images/users/avatar-2.png') }}"
                                                    alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Marie Prohaska</a></h6>
                                                <p class="text-slate-500">Graphic Designer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">United Kingdom</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">prohaska@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">853 565 9802</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">04 Jan, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 inline-flex items-center status"><i
                                                data-lucide="check-circle" class="size-3 mr-1.5"></i> Verified</span></td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction1" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction1">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 active">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox2"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500002</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                <img src="{{ URL::asset('build/images/users/avatar-3.png') }}"
                                                    alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Jaqueline Hammes</a>
                                                </h6>
                                                <p class="text-slate-500">ASP.Net Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">Brazil</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">jaqueline@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">546 6334 586</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">18 Jan, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 inline-flex items-center text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 status"><i
                                                data-lucide="loader" class="size-3 mr-1.5"></i> Waiting</span></td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction2" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction2">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox3"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500003</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                <img src="{{ URL::asset('build/images/users/avatar-4.png') }}"
                                                    alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Marlene Hirthe</a>
                                                </h6>
                                                <p class="text-slate-500">Angular Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">Spain</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">marlene@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">141 654 9876</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">04 Feb, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 inline-flex items-center status"><i
                                                data-lucide="check-circle" class="size-3 mr-1.5"></i> Verified</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction3" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction3">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox4"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500004</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                <img src="{{ URL::asset('build/images/users/avatar-5.png') }}"
                                                    alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Akeem Paucek</a></h6>
                                                <p class="text-slate-500">Jr. Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">Mexico</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">akeem.p@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">783 962 3972</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">12 Feb, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 inline-flex items-center text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 status"><i
                                                data-lucide="x" class="size-3 mr-1.5"></i> Rejected</span></td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction4" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction4">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox5"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500005</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                <img src="{{ URL::asset('build/images/users/avatar-6.png') }}"
                                                    alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Stephon Trantow</a>
                                                </h6>
                                                <p class="text-slate-500">Full Stack Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">Spain</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">akeem.p@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">032 126 5833</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">31 Feb, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 inline-flex items-center text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 status"><i
                                                data-lucide="loader" class="size-3 mr-1.5"></i> Waiting</span></td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction4" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction4">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox6"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500006</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                DT
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Domenic Tromp</a>
                                                </h6>
                                                <p class="text-slate-500">Team Leader</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">Germany</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">domenic@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">612 6088 735</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">27 Oct, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 inline-flex items-center status"><i
                                                data-lucide="check-circle" class="size-3 mr-1.5"></i> Verified</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction4" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction4">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox7"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500007</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                <img src="{{ URL::asset('build/images/users/avatar-7.png') }}"
                                                    alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Ethel Corwin</a></h6>
                                                <p class="text-slate-500">Web Designer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">Italy</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">ecorwin@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">216 897 4978</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">03 Aug, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 inline-flex items-center status"><i
                                                data-lucide="check-circle" class="size-3 mr-1.5"></i> Verified</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction4" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction4">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox8"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500008</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                <img src="{{ URL::asset('build/images/users/avatar-8.png') }}"
                                                    alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Rickie Cremin</a>
                                                </h6>
                                                <p class="text-slate-500">Web Designer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">France</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">ecorwin@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">388 946 3889</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">01 July, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 inline-flex items-center text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 status"><i
                                                data-lucide="loader" class="size-3 mr-1.5"></i> Waiting</span></td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction4" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction4">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox9"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500009</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                RL
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Reagan Larson</a>
                                                </h6>
                                                <p class="text-slate-500">Team Leader</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">Denmark</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">reagan@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">612 6088 735</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">27 Oct, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 inline-flex items-center status"><i
                                                data-lucide="check-circle" class="size-3 mr-1.5"></i> Verified</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction4" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction4">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100">
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox10"
                                                class="size-4 bg-white border border-slate-200 checked:bg-none rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 cursor-pointer"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#TW1500010</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800">
                                                <img src="{{ URL::asset('build/images/users/avatar-9.png') }}"
                                                    alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-1"><a href="#!" class="name">Glennie Langosh</a>
                                                </h6>
                                                <p class="text-slate-500">Project Manager</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">Germany</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">glennie@tailwick.com</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">357 716 8847</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">11 Dec, 2023</td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 inline-flex items-center text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 status"><i
                                                data-lucide="x" class="size-3 mr-1.5"></i> Rejected</span></td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                        <div class="relative dropdown">
                                            <button
                                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                                id="usersAction4" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                                aria-labelledby="usersAction4">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="{{ url('pages-account') }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="addUserModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="file-edit"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal"
                                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                        href="#!"><i data-lucide="trash-2"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="py-6 text-center">
                                <i data-lucide="search"
                                    class="size-6 mx-auto text-sky-500 fill-sky-100"></i>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="mb-0 text-slate-500">We've searched more than 199+ users We
                                    did not find any users for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center mt-8 md:flex-row">
                        <div class="mb-4 grow md:mb-0">
                            <p class="text-slate-500">Showing <b>10</b> of <b>57</b> Results</p>
                        </div>
                        <ul class="flex flex-wrap items-center gap-2">
                            <li>
                                <a href="#!"
                                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                        class="size-4 rtl:rotate-180" data-lucide="chevrons-left"></i></a>
                            </li>
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
                                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                        class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                        class="size-4 rtl:rotate-180" data-lucide="chevrons-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end grid-->



    <div id="addUserModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md">
            <div class="flex items-center justify-between p-4 border-b">
                <h5 class="text-16">Add User</h5>
                <button data-modal-close="addUserModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-3">
                        <label for="userId" class="inline-block mb-2 text-base font-medium">User ID</label>
                        <input type="text" id="userId"
                            class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            disabled value="#TW1500004" required>
                    </div>
                    <div class="mb-3">
                        <label for="joiningDateInput" class="inline-block mb-2 text-base font-medium">Joining Date</label>
                        <input type="text" id="joiningDateInput"
                            class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y">
                    </div>
                    <div class="mb-3">
                        <label for="userNameInput" class="inline-block mb-2 text-base font-medium">Name</label>
                        <input type="text" id="userNameInput"
                            class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="inline-block mb-2 text-base font-medium">Email</label>
                        <input type="email" id="emailInput"
                            class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumberInput" class="inline-block mb-2 text-base font-medium">Phone Number</label>
                        <input type="text" id="phoneNumberInput"
                            class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            placeholder="12345 67890" required>
                    </div>
                    <div class="mb-3">
                        <label for="statusSelect" class="inline-block mb-2 text-base font-medium">Status</label>
                        <select class="form-input border-slate-300 focus:outline-none focus:border-custom-500" data-choices
                            data-choices-search-false name="statusSelect" id="statusSelect">
                            <option value="">Select Status</option>
                            <option value="Verified">Verified</option>
                            <option value="Waiting">Waiting</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="locationInput" class="inline-block mb-2 text-base font-medium">Location</label>
                        <input type="text" id="locationInput"
                            class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            placeholder="Location" required>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addDocuments"
                            class="text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600">Cancel</button>
                        <button type="submit"
                            class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Add
                            User</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end add user-->

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
    </div>
@endsection
@push('scripts')
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <!-- User list init js -->
    <script src="{{ URL::asset('build/js/pages/apps-user-list.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
