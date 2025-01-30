<div id="showModal" modal-center
     class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[30rem] bg-white shadow rounded-md">
        <div class="flex items-center justify-between p-4 border-b border-slate-200">
            <h5 class="text-16" id="exampleModalLabel">Add Vehicle</h5>
            {{-- <button data-modal-close="showVehicleModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-slate-500"><i data-lucide="x"
                        class="size-5"></i></button> --}}
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
            <form action="{{ route('vehicles.store') }}" method="POST">
                @csrf
                <h2 class="text-lg font-bold mb-4">Vehicle Information</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block font-medium">Vehicle Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" required class="form-input w-full border-slate-200">
                    </div>
                    <div>
                        <label for="type" class="block font-medium">Vehicle Type <span class="text-red-500">*</span></label>
                        <input type="text" id="type" name="type" required class="form-input w-full border-slate-200">
                    </div>
                    <div>
                        <label for="license_plate" class="block font-medium">License Plate <span class="text-red-500">*</span></label>
                        <input type="text" id="license_plate" name="license_plate" required class="form-input w-full border-slate-200">
                    </div>
                    <div>
                        <label for="capacity" class="block font-medium">Capacity <span class="text-red-500">*</span></label>
                        <input type="number" id="capacity" name="capacity" required class="form-input w-full border-slate-200">
                    </div>
                    <div>
                        <label for="rental_price_per_day" class="block font-medium">Rental Price per Day <span class="text-red-500">*</span></label>
                        <input type="number" step="0.01" id="rental_price_per_day" name="rental_price_per_day" required class="form-input w-full border-slate-200">
                    </div>
                    <div>
                        <label for="is_available" class="block font-medium">Availability</label>
                        <select id="is_available" name="is_available" class="form-input w-full border-slate-200">
                            <option value="1">Available</option>
                            <option value="0">Not Available</option>
                        </select>
                    </div>
                </div>
                
                <h2 class="text-lg font-bold mt-6 mb-4">Vehicle Details</h2>
                
                <h3 class="text-lg mt-4 mb-2">Surat - Surat</h3>
                <div class="grid grid-cols-3 gap-4">
                    @foreach(['stnk', 'buku_kir', 'kartu_tap_oli'] as $detail)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="{{ $detail }}" value="1" class="form-checkbox">
                            <span class="ml-2 capitalize">{{ str_replace('_', ' ', $detail) }}</span>
                        </label>
                    @endforeach
                </div>
                
                <h3 class="text-lg mt-4 mb-2">Peralatan Mobil</h3>
                <div class="grid grid-cols-3 gap-4">
                    @foreach(['dongkrak', 'ban_serep', 'kunci_roda'] as $detail)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="{{ $detail }}" value="1" class="form-checkbox">
                            <span class="ml-2 capitalize">{{ str_replace('_', ' ', $detail) }}</span>
                        </label>
                    @endforeach
                </div>
                
                <h3 class="text-lg mt-4 mb-2">BBM</h3>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="bbm_full" value="1" class="form-checkbox">
                        <span class="ml-2">Full</span>
                    </label>
                </div>
                
                <h3 class="text-lg mt-4 mb-2">Kelistrikan</h3>
                <div class="grid grid-cols-3 gap-4">
                    @foreach(['lampu_utama', 'lampu_belakang', 'lampu_sein', 'lampu_dalam', 'lcd', 'ac'] as $detail)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="{{ $detail }}" value="1" class="form-checkbox">
                            <span class="ml-2 capitalize">{{ str_replace('_', ' ', $detail) }}</span>
                        </label>
                    @endforeach
                </div>
                
                <div class="flex justify-end gap-2 mt-6">
                    <button type="button" data-modal-close="showVehicleModal" 
                            class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100">Cancel</button>
                    <button type="submit" 
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Save</button>
                </div>
            </form>            
        </div>
    </div>
</div>