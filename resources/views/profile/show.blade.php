@extends('layouts.master')
@section('title')
    {{ __('Account Settings') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Profile" pagetitle="Pages" />

    <div class="card">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
                <div class="lg:col-span-2 2xl:col-span-1">
                    <div
                        class="relative inline-block size-20 rounded-full shadow-md bg-slate-100 profile-user xl:size-28">
                        <img src="{{ URL::asset('storage/'.Auth::user()->Employe->profile_photo_path) }}" alt=""
                            class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                        <form id="profile-photo-form" action="{{ route('profile.update-photo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div
                                class="absolute bottom-0 flex items-center justify-center size-8 rounded-full ltr:right-0 rtl:left-0 profile-photo-edit">
                                <input input type="file" name="profile_photo" class="hidden" id="profile-img-file-input" onchange="submitForm()">
                                <label for="profile-img-file-input"
                                    class="flex items-center justify-center size-8 bg-white rounded-full shadow-lg cursor-pointer profile-photo-edit">
                                    <i data-lucide="image-plus"
                                        class="size-4 text-slate-500 fill-slate-100"></i>
                                </label>
                            </div>
                        </form>
                    </div>
                </div><!--end col-->
                <div class="lg:col-span-10 2xl:col-span-9">
                    <h5 class="mb-1">{{ Auth::user()->Employe->name }} <i data-lucide="badge-check"
                            class="inline-block size-4 text-sky-500 fill-sky-100"></i></h5>
                    <div class="flex gap-3 mb-4">
                        <p class="text-slate-500"><i data-lucide="user-circle"
                                class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 fill-slate-100"></i>
                                {{ Auth::user()->Employe->position }}</p>
                    </div>
                </div>
            </div><!--end grid-->
        </div>
        <div class="card-body !py-0">
            <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                <li class="group active">
                    <a href="javascript:void(0);" data-tab-toggle data-target="personalTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 -mb-[1px]">Personal
                        Info</a>
                </li>
                <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="changePasswordTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 -mb-[1px]">Change
                        Password</a>
                </li>
            </ul>
        </div>
    </div><!--end card-->

    <div class="tab-content">
        <div class="block tab-pane" id="personalTabs">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-1 text-15">Personal Information</h6>
                    <p class="mb-4 text-slate-500">Update your personal details here easily.
                    </p>
                    <form action="{{ route('profile.update') }}" method="POST" class="edit-form">
                        @csrf
                        @method('PUT')
                    
                        <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                            <!-- Name -->
                            <div class="xl:col-span-6">
                                <label for="name" class="inline-block mb-2 text-base font-medium">First Name</label>
                                <input type="text" name="name" id="name" class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                                    placeholder="Enter your value" value="{{ old('name', Auth::user()->employe->name) }}">
                            </div><!--end col-->
                    
                            <!-- Phone -->
                            <div class="xl:col-span-6">
                                <label for="phone" class="inline-block mb-2 text-base font-medium">Phone Number</label>
                                <input type="text" name="phone" id="phone" class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                                    placeholder="Enter phone number" value="{{ old('phone', Auth::user()->employe->phone) }}">
                            </div><!--end col-->
                    
                            <!-- Email -->
                            <div class="xl:col-span-6">
                                <label for="email" class="inline-block mb-2 text-base font-medium">Email Address</label>
                                <input type="email" name="email" id="email" class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                                    placeholder="Enter email address" value="{{ old('email', Auth::user()->employe->email) }}">
                            </div><!--end col-->
                    
                            <!-- Submit Button -->
                            <div class="xl:col-span-12 flex justify-end mt-6 gap-x-4">
                                <button type="submit"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 btn-edit">
                                    Update</button>
                                {{-- <button type="reset"
                                    class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100">
                                    Cancel</button> --}}
                            </div><!--end col-->
                        </div><!--end grid-->
                    </form>                    
                </div>
            </div>
        </div>
        
        <div class="hidden tab-pane" id="changePasswordTabs">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Changes Password</h6>
                    <form action="{{ route('change.password') }}" method="POST" class="pw-form">
                        @csrf
                        
                        <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                            <!-- Old Password -->
                            <div class="xl:col-span-4">
                                <label for="old_password" class="inline-block mb-2 text-base font-medium">Old Password*</label>
                                <div class="relative">
                                    <input type="password" name="old_password"
                                        class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                        id="oldpasswordInput" placeholder="Enter current password" required>
                                    <button class="absolute top-2 ltr:right-4 rtl:left-4 toggle-password" type="button"><i
                                            class="align-middle ri-eye-fill text-slate-500"></i></button>   
                                </div>
                                @error('old_password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div><!--end col-->
                            
                            <!-- New Password -->
                            <div class="xl:col-span-4">
                                <label for="new_password" class="inline-block mb-2 text-base font-medium">New Password*</label>
                                <div class="relative">
                                    <input type="password" name="new_password"
                                        class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                        id="newpasswordInput" placeholder="Enter new password" required>
                                    <button class="absolute top-2 ltr:right-4 rtl:left-4 toggle-password" type="button"><i
                                            class="align-middle ri-eye-fill text-slate-500"></i></button>
                                </div>
                                @error('new_password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div><!--end col-->
                    
                            <!-- Confirm New Password -->
                            <div class="xl:col-span-4">
                                <label for="new_password_confirmation" class="inline-block mb-2 text-base font-medium">Confirm
                                    Password*</label>
                                <div class="relative">
                                    <input type="password" name="new_password_confirmation"
                                        class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                        id="newpasswordConfirmationInput" placeholder="Confirm new password" required>
                                    <button class="absolute top-2 ltr:right-4 rtl:left-4 toggle-password" type="button"><i
                                            class="align-middle ri-eye-fill text-slate-500"></i></button>
                                </div>
                                @error('new_password_confirmation')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div><!--end col-->
                    
                            <!-- Submit Button -->
                            <div class="flex justify-end xl:col-span-6">
                                <button type="submit"
                                    class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 btn-pw">
                                    Change Password
                                </button>
                            </div>
                        </div><!--end grid-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/js/pages/pages-account-setting.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        function submitForm() {
            // Men-submit formulir secara otomatis ketika file dipilih
            document.getElementById('profile-photo-form').submit();
        }
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const passwordInput = this.previousElementSibling;
                const type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Tangkap semua tombol dengan class btn-delete
            const deleteButtons = document.querySelectorAll('.btn-pw');
            deleteButtons.forEach((button) => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                
                    const deleteForm = this.closest('.pw-form');
                
                    Swal.fire({
                        title: 'Are you sure you want to change your password?',
                        text: "After the password has been changed, log in again!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, change it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            deleteForm.submit();
                        }
                    });
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            // Tangkap semua tombol dengan class btn-delete
            const deleteButtons = document.querySelectorAll('.btn-edit');
            deleteButtons.forEach((button) => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                
                    const deleteForm = this.closest('.edit-form');
                
                    Swal.fire({
                        title: 'Are you sure you want to change?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, change it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            deleteForm.submit();
                        }
                    });
                });
            });
        });
    </script>
@endpush
