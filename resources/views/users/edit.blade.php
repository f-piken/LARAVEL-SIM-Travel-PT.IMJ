<!-- Edit Modal -->
<div id="editModal" modal-center
    class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[30rem] bg-white shadow rounded-md">
        <div class="flex items-center justify-between p-4 border-b border-slate-200">
            <h5 class="text-16" id="exampleModalLabel">Edit User</h5>
            <button data-modal-close="editModal" type="button"
                class="transition-all duration-200 ease-linear "><i data-lucide="x"
                    class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
            <form action="{{ route('users.update', 'user_id') }}" method="POST" id="editForm">
                @csrf
                @method('PUT')
                <h2 class="text-lg font-bold mb-4">User and Employee Information</h2>

                <!-- User Information -->
                <div class="grid gap-4 mb-4">
                    <div>
                        <label for="name" class="block font-medium">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" id="editName" name="name" required class="form-input w-full border-slate-200">
                    </div>

                    <div>
                        <label for="email" class="block font-medium">Email <span class="text-red-500">*</span></label>
                        <input type="email" id="editEmail" name="email" class="form-input w-full border-slate-200" placeholder="Boleh Kosong">
                    </div>

                    <div>
                        <label for="phone" class="block font-medium">Phone</label>
                        <input type="text" id="editPhone" name="phone" required class="form-input w-full border-slate-200" placeholder="Boleh Kosong">
                    </div>

                    <div>
                        <label for="position" class="block font-medium">Position</label>
                        <input type="text" id="editPosition" name="position" class="form-input w-full border-slate-200">
                    </div>

                    <div>
                        <label for="salary" class="block font-medium">Salary</label>
                        <input type="number" id="editSalary" name="salary" class="form-input w-full border-slate-200">
                    </div>
                </div>

                <!-- User Login Information -->
                <h3 class="text-lg font-bold mb-4">User Login Information</h3>
                <div class="grid gap-4 mb-4">
                    <div>
                        <label for="username" class="block font-medium">Username <span class="text-red-500">*</span></label>
                        <input type="text" id="editUsername" name="username" required class="form-input w-full border-slate-200">
                    </div>

                    <div>
                        <label for="password" class="block font-medium">Password <span class="text-red-500">*</span></label>
                        <input type="password" id="editPassword" name="password" class="form-input w-full border-slate-200">
                    </div>

                    <div>
                        <label for="role" class="block font-medium">Role</label>
                        <select id="editRole" name="role" class="form-select w-full border-slate-200">
                            <option>
                            @foreach ($roles as $item)
                                <option value="{{ $item->id }}" {{ old('role',$item->id) }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex justify-end gap-2 mt-6">
                    <button type="button" data-modal-close="editModal"
                        class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100">Cancel</button>
                    <button type="submit"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                        <i data-lucide="save" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                        <span class="align-middle">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>