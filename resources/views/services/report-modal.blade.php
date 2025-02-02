<div id="showModal" modal-center
         class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md">
            <div class="flex items-center justify-between p-4 border-b border-slate-200">
                <h5 class="text-16" id="exampleModalLabel">Add Customer</h5>
                <button data-modal-close="showModal" type="button"
                        class="transition-all duration-200 ease-linear "><i data-lucide="x"
                            class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                <form id="reportForm" action="{{ route('service.report') }}" method="GET">
                    <div class="mb-3">
                        <label for="month" class="block mb-1 font-medium">Select Month</label>
                        <select name="month" id="month" class="w-full p-2 border rounded-md">
                            <option value="">Select Month</option>
                            @foreach($months as $m)
                                <option value="{{ $m }}">{{ date('F', mktime(0, 0, 0, $m, 10)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="year" class="block mb-1 font-medium">Select Year</label>
                        <select name="year" id="year" class="w-full p-2 border rounded-md">
                            <option value="">Select Year</option>
                            @foreach($years as $y)
                                <option value="{{ $y }}">{{ $y }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-end gap-2">
                        <button type="button" data-modal-close="showModal" 
                                class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100">Cancel</button>
                        <button type="submit" 
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                                {{-- <i data-lucide="save" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> --}}
                                <span class="align-middle">Generate Report</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>