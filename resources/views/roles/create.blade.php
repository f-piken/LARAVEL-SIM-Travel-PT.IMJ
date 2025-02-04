<div id="showModal" modal-center
    class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[30rem] bg-white shadow rounded-md">
        <div class="flex items-center justify-between p-4 border-b border-slate-200">
            <h5 class="text-16" id="exampleModalLabel">Add Role</h5>
            <button data-modal-close="showModal" type="button"
                class="transition-all duration-200 ease-linear "><i data-lucide="x"
                    class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <h2 class="text-lg font-bold mb-4">Role Information</h2>
                <div class="grid gap-4">
                    <div>
                        <label for="name" class="block font-medium">Role Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" required class="form-input w-full border-slate-200">
                    </div>
                </div>

                <div class="flex justify-end gap-2 mt-6">
                    <button type="button" data-modal-close="showModal"
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