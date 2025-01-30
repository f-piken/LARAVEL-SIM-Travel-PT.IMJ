<div id="showModal" modal-center
         class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md">
            <div class="flex items-center justify-between p-4 border-b border-slate-200">
                <h5 class="text-16" id="exampleModalLabel">Add Customer</h5>
                <button data-modal-close="showModal"
                        class="transition-all duration-200 ease-linear text-slate-400 hover:text-slate-500"><i data-lucide="x"
                            class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                <form class="tablelist-form" action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="customername-field" class="inline-block mb-2 text-base font-medium">Customer Name
                            <span class="text-red-500">*</span></label>
                        <input type="text" id="customername-field" name="name"
                               class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                               placeholder="Enter customer name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone-field" class="inline-block mb-2 text-base font-medium">Phone Number <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="phone-field" name="phone"
                               class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                               placeholder="Enter phone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="address-field" class="inline-block mb-2 text-base font-medium">Address <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="address-field" name="address"
                               class="form-input border-slate-200 focus:outline-none focus:border-custom-500"
                               placeholder="Enter address" required>
                    </div>
                    <div class="flex justify-end gap-2">
                        <button type="button" data-modal-close="showModal" 
                                class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100">Cancel</button>
                        <button type="submit" 
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>