@extends('layouts.master')
@section('title')
    {{ __('Booking Overview') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Booking Overview" pagetitle="Booking" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="card print:shadow-none print:border-none">
                <div class="card-body print:hidden">
                    <div class="flex flex-col gap-5 md:items-center md:flex-row">
                        <div class="grow">
                            <h6 class="mb-1 text-16">#{{ $booking->id }}</h6>
                            <ul class="flex items-center gap-3">
                                <li class="text-slate-500">Create: {{ \Carbon\Carbon::parse($booking->created_at)->format('d F, Y') }}</li>
                                <li class="text-slate-500">Due: {{ \Carbon\Carbon::parse($booking->start_date)->format('d F, Y H:i') }}</li>
                            </ul>
                        </div>
                        <div class="flex items-center gap-2 shrink-0">
                            <button type="button" onclick="window.location.href='{{ route('booking.downloadPdf', $booking->id) }}'"
                                class="text-white bg-purple-500 border-purple-500 btn hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100">
                                <i data-lucide="printer" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">Download</span></button>
                            @if ($booking->status == 'pending')
                                <button onclick="submitForm()" type="button"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                                    <i data-lucide="save" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> 
                                    <span class="align-middle">Save</span></button>
                            @endif
                            <div class="relative dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100"
                                    id="categoryNotes1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-4"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                    aria-labelledby="categoryNotes1">
                                    @if ($booking->status == 'deposit')
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                            href="{{ url('apps-invoice-add-new') }}"><i data-lucide="check-square"
                                                class="inline-block size-3 mr-1"></i> <span
                                                class="align-middle">Mark as Lunas</span></a>
                                    </li>
                                    @endif
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                            href="{{ url('apps-invoice-add-new') }}"><i data-lucide="file-edit"
                                                class="inline-block size-3 mr-1"></i> <span
                                                class="align-middle">Edit</span></a>
                                    </li>
                                    <li>
                                        <a data-modal-target="deleteModal"
                                            class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                            href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                                            <span class="align-middle">Delete</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                            href="{{ route('bookings.index') }}"><i data-lucide="book" class="inline-block size-3 mr-1"></i>
                                            <span class="align-middle">Booking Data</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="!pt-0 card-body">
                    <div class="p-5 border rounded-md md:p-8 border-slate-200 print:p-0">
                        <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                            <div class="text-center xl:col-span-2 ltr:xl:text-left rtl:xl:text-right">
                                <div
                                    class="flex items-center justify-center size-16 mx-auto rounded-md bg-slate-100 xl:mx-0">
                                    <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" class="h-8">
                                </div>
                                <h5 class="mt-4 mb-1">PT. ikhwanin Mulyojoyo</h5>
                                <p class="text-slate-500">(Ikhwanin Trans & Tour Travel)</p>
                            </div><!--end col-->
                            <div class="ltr:xl:text-right rtl:xl:text-left xl:col-start-10 xl:col-span-6">
                                <p class="mb-1 text-slate-500">Customer Name : <span
                                    class="font-semibold">{{ $booking->customer->name }}</span></p>
                                <p class="mb-1 text-slate-500">Address : <span
                                    class="font-semibold">{{ $booking->customer->address }}</span></p>
                                {{-- <p class="mb-1 text-slate-500">Website: <a href="https://themesdesign.in"
                                        target="_blank"
                                        class="font-semibold underline text-custom-500">www.themesdesign.in</a></p> --}}
                                <p class="mb-1 text-slate-500">Contact No : <span 
                                    class="font-semibold">{{ $booking->customer->phone }}</span></p>
                                <p class="mb-1 text-slate-500">Vehicle / Nopol : <span 
                                    class="font-semibold">{{ $booking->vehicle->name }} / {{ $booking->vehicle->license_plate }}</span></p>
                                <p class="mb-1 text-slate-500">Price /day : <span 
                                    class="font-semibold">Rp. {{ number_format($booking->vehicle->rental_price_per_day, 2) }}</span></p>
                                <p class="mb-1 text-slate-500">Duration : 
                                    <span class="font-semibold">{{ $durationInDays }} hari 
                                    @if($remainingHours > 0)
                                        {{ $remainingHours }} jam
                                    @endif
                                    </span></p>
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div
                            class="grid grid-cols-1 mt-6 text-center divide-y md:divide-y-0 md:divide-x rtl:divide-x-reverse divide-dashed md:grid-cols-4 divide-slate-200">
                            {{-- <div class="p-3">
                                <h6 class="mb-1">#TW15090254</h6>
                                <p class="text-slate-500">Invoice No</p>
                            </div><!--end col--> --}}
                            <div class="p-3">
                                <h6 class="mb-1">{{ \Carbon\Carbon::parse($booking->start_date)->format('d F, Y H:i') }}</h6>
                                <p class="text-slate-500">Start Date</p>
                            </div><!--end col-->
                            <div class="p-3">
                                <h6 class="mb-1">{{ \Carbon\Carbon::parse($booking->end_date)->format('d F, Y H:i') }}</h6>
                                <p class="text-slate-500">End Date</p>
                            </div><!--end col-->
                            <div class="p-3">
                                @php
                                    $status = strtolower($booking->status);
                                    $statusClasses = [
                                        'pending' => 'bg-yellow-100 text-yellow-500',
                                        'deposit' => 'bg-blue-100 text-blue-500',
                                        'lunas' => 'bg-green-100 text-green-500'
                                    ];
                                    $badgeClass = $statusClasses[$status] ?? 'bg-gray-100 text-gray-500';
                                @endphp
                            
                                <h6 class="mb-1">
                                    <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border border-transparent {{ $badgeClass }}">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </h6>
                                <p class="text-slate-500">Payment Status</p>
                            </div>
                            
                            <div class="p-3">
                                <h6 class="mb-1">Rp. {{ number_format($booking->charge, 2) }}</h6>
                                <p class="text-slate-500">Total Amount</p>
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div class="grid grid-cols-1 gap-5 mt-8 md:grid-cols-2">
                            <div>
                                <p class="mb-2 text-sm uppercase text-slate-500">Destination</p>
                                <h6 class="mb-1 text-15">{{ $booking->destination }}</h6>
                                {{-- <p class="mb-1 text-slate-500">176 Arvid Crest Sheastad, IA</p>
                                <p class="mb-1 text-slate-500">+(211) 0123 456 897</p> --}}
                            </div><!--end col-->
                            <div>
                                <p class="mb-2 text-sm uppercase text-slate-500">Description</p>
                                <h6 class="mb-1 text-15">{{ $booking->description ? $booking->description : '-' }}</h6>
                                {{-- <p class="mb-1 text-slate-500">176 Arvid Crest Sheastad, IA</p>
                                <p class="mb-1 text-slate-500">+(211) 0123 456 897</p>
                                <p class="mb-1 text-slate-500">TAX No. 5415421</p> --}}
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div class="mt-6 overflow-x-auto">
                            <p class="mb-2 text-sm uppercase text-slate-500">Vehicle Details</p>
                            <table class="w-full whitespace-nowrap">
                                <thead class="ltr:text-left rtl:text-right" style="width: 100px;">
                                    <tr>
                                        <th class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200">#</th>
                                        <th class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200">Item Name</th>
                                        <th class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200">Kelengkapan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $details = $booking->vehicle->details;
                                        $categories = [
                                            'Surat - Surat' => [
                                                'stnk' => $details->stnk,
                                                'buku_kir' => $details->buku_kir,
                                                'kartu_tap_oli' => $details->kartu_tap_oli
                                            ],
                                            'Peralatan Mobil' => [
                                                'dongkrak' => $details->dongkrak,
                                                'ban_serep' => $details->ban_serep,
                                                'kunci_roda' => $details->kunci_roda
                                            ],
                                            'BBM' => [
                                                'bbm_full' => $details->bbm_full
                                            ],
                                            'Kelistrikan' => [
                                                'lampu_utama' => $details->lampu_utama,
                                                'lampu_belakang' => $details->lampu_belakang,
                                                'lampu_sein' => $details->lampu_sein,
                                                'lampu_dalam' => $details->lampu_dalam,
                                                'lcd' => $details->lcd,
                                                'ac' => $details->ac
                                            ]
                                        ];
                                        $index = 1;
                                    @endphp
                            
                                    @foreach ($categories as $category => $items)
                                        <tr>
                                            <td colspan="3" class="px-3.5 py-2.5 bg-gray-100 font-semibold border-b border-slate-200">{{ $category }}</td>
                                        </tr>
                                        @foreach ($items as $key => $value)
                                            <tr>
                                                <td class="px-3.5 py-2.5 border-b border-slate-200">{{ $index++ }}</td>
                                                <td class="px-3.5 py-2.5 border-b border-slate-200 capitalize">{{ str_replace('_', ' ', $key) }}</td>
                                                <td class="px-3.5 py-2.5 border-b border-slate-200">{{ $value ? 'Yes' : 'No' }}</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>
                        <div class="mt-6 overflow-x-auto">
                            <p class="mb-2 text-sm uppercase text-slate-500">description of body damage</p>
                            <table class="w-full whitespace-nowrap">
                                <thead class="ltr:text-center rtl:text-right" style="width: 100px;">
                                    <tr>
                                        <th class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200">Sebelum</th>
                                        <th class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200">Sesudah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200">{{ $booking->details->deskripsi_sebelum }}</td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200">{{ $booking->details->deskripsi_sesudah }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="w-full whitespace-nowrap">
                                <tbody class="before:block before:h-3">
                                    <tr>
                                        <td colspan="6" style="width: 28rem;"></td>
                                        <td class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500">
                                            @if ($booking->status == 'pending')
                                                <form action="{{ route('booking.deposit', $booking->id) }}" method="POST" id="depositForm" class="flex items-center gap-2">
                                                    @csrf
                                                    <strong>Deposit:</strong> Rp.
                                                    <input type="number" name="deposit" id="deposit" min="0" step="1000" 
                                                        value="{{ $booking->deposit }}" 
                                                        class="w-24 px-2 py-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                                </form>
                                            @else
                                                <strong>Deposit:</strong> Rp. {{ number_format($booking->deposit, 2) }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"></td>
                                        <td class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500">
                                            <strong>Amount:</strong> Rp. {{ number_format($booking->charge, 2) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"></td>
                                        <td class="border-b border-slate-200 px-3.5 py-2.5 font-medium">
                                            <strong>Total Amount:</strong> Rp. {{ number_format($booking->balance, 2) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="my-5">
                            <p class="mb-2 text-sm uppercase text-slate-500">Payments Details</p>
                            <p class="mb-1 text-slate-500">Payment Method: Credit Card</p>
                            <p class="mb-1 text-slate-500">Card Holder: Paula Keenan</p>
                            <p class="mb-1 text-slate-500">Card Number: xxxx xxxx xxxx 1402</p>
                            <p class="mb-0 text-slate-500">Total Amount: <b>$755.96</b></p>
                        </div>

                        <div
                            class="flex gap-1 px-4 py-3 text-sm border rounded-md md:items-center border-sky-200 text-sky-500 bg-sky-50">
                            <p><span class="font-bold">NOTES:</span> All accounts are to be paid within 7 days from receipt
                                of invoice. To be paid by cheque or credit card or direct payment online. If account is not
                                paid within 7 days the credits details supplied as confirmation of work undertaken will be
                                charged the agreed quoted fee noted above.</p>
                        </div> --}}
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->


    <form id="deleteForm" action="{{ route('bookings.destroy', ['booking' => $booking->id]) }}" method="POST">
        @csrf
        @method('DELETE')
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
    </form>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script>
        function submitForm() {
            document.getElementById("depositForm").submit();
        }
    </script>
@endpush
