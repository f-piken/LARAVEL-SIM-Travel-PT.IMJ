@extends('layouts.master')
@section('title', __('Employee List'))

@push('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <!-- page title -->
    <x-page-title title="Employee List" pagetitle="Employees" />

    <div class="card">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-2">
                <div>
                    <div class="relative xl:w-3/6">
                        <form action="{{ route('users.index') }}" method="GET">
                            <div class="flex border border-slate-200 rounded-md overflow-hidden">
                                <input type="text" name="search" class="flex-1 form-input border-none focus:outline-none focus:ring-0 disabled:bg-slate-100 placeholder:text-slate-400" placeholder="Search for users..." value="{{ $search }}" autocomplete="off">
                                <button type="submit" class="bg-gray-200 text-gray-700 px-4 flex items-center justify-center hover:bg-gray-300">
                                    <i class="ri-search-2-line"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-end">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#showModal" data-modal-target="showModal"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 add-btn">
                        <i class="align-bottom ri-add-line me-1"></i> Add Role
                    </button>
                    <button type="button" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 btn-bulk-delete">
                        <i class="ri-delete-bin-2-line"></i>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                @if (session('success'))
                    <div id="alert" class="relative mb-2 p-3 pr-12 text-sm bg-green-500 border border-transparent rounded-md text-green-50">
                        <button data-dismiss="alert" class="absolute top-0 bottom-0 right-0 p-3 text-green-200 transition hover:text-green-100"><i data-lucide="x" class="h-5"></i></button>
                        <span class="font-bold">Success!</span> {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('users.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                    @csrf
                    @method('DELETE')
                    <table class="w-full whitespace-nowrap" id="employeeTable">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    <input type="checkbox" id="checkAll" class="size-4 border rounded-sm cursor-pointer bg-slate-100 border-slate-200">
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Name</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Username</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Email</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Phone</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Position</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Salary</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><th><form></form></th></tr>
                            @forelse($users as $item)
                                <tr>
                                    <th class="px-3.5 py-2.5 border-y border-slate-200">
                                        <input type="checkbox" class="size-4 border rounded-sm bulk-delete-checkbox" name="ids[]" value="{{ $item->employe_id }}">
                                    </th>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->employe->name }}</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->username }}</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->employe->email ?? 'N/A' }}</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->employe->phone }}</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $item->employe->position }}</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">Rp. {{ number_format($item->employe->salary, 2) }}</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200">
                                        <form action="{{ route('users.destroy', $item->employe_id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <div class="flex gap-2">
                                                <a href="javascript:void(0);" class="text-white bg-yellow-500 border-yellow-500 btn hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100"
                                                    data-bs-toggle="modal" data-bs-target="#editModal" data-modal-target="editModal"
                                                    onclick="openEditModal(
                                                    '{{ $item->id }}', 
                                                    '{{ $item->employe->name }}', 
                                                    '{{ $item->username }}', 
                                                    '{{ $item->employe->email }}',
                                                    '{{ $item->employe->phone }}',
                                                    '{{ $item->employe->position }}',
                                                    '{{ $item->employe->salary }}',
                                                    '@foreach ($roles as $role){{ $item->hasRole($role->name) ? $role->id : '' }}@endforeach',
                                                    )">
                                                    <i class="ri-edit-line"></i> Edit
                                                </a>
                                                <button type="button" id="sa-params" class="text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 btn-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </form>
            </div>

            <!-- Pagination -->
            <div class="flex justify-end mt-4">
                <div class="flex gap-2 pagination-wrap">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('users.create')
    @include('users.edit')
@endsection

@push('scripts')
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script>
        document.querySelector('[data-modal-close="showModal"]').addEventListener('click', () => {
            document.getElementById('showModal').classList.remove('hidden');
            document.getElementById('showModal').classList.add('show');
        });
        function openEditModal(userId, name, username, email, phone, position, salary, role) {
            // Set the form action to the correct route with the role ID
            const formAction = `/users/${userId}`;
            document.getElementById('editForm').action = formAction;
    
            // Set the name field
            document.getElementById('editName').value = name;
            document.getElementById('editUsername').value = username;
            document.getElementById('editEmail').value = email;
            document.getElementById('editPhone').value = phone;
            document.getElementById('editPosition').value = position;
            document.getElementById('editSalary').value = salary;
            document.getElementById('editRole').value = role;

            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editModal').classList.add('show');
        }
    </script>
    @include('layouts.script-delete')
@endpush
