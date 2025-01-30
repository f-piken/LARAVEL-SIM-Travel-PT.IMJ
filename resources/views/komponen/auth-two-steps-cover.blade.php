@extends('layouts.master-without-nav')
@section('title')
    {{ __('Two Steps') }}
@endsection
@section('content')

    <body
        class="flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern font-public">

        <div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none">
            <div class="!px-10 !py-12 card-body">
                <a href="index">
                    <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" class="hidden h-6 mx-auto">
                    <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" class="block h-6 mx-auto">
                </a>

                <div class="mt-8 text-center">
                    <h4 class="mb-2 text-custom-500">Verify Email</h4>
                    <p class="mb-8 text-slate-500">Please enter the <b class="font-medium">4</b> digit
                        code sent to <b class="font-medium">tailwick@themesdesign.com</b></p>
                </div>

                <form autocomplete="off" action="index.html">
                    <div class="grid grid-cols-1 gap-2 xl:grid-cols-4">
                        <div>
                            <label for="digit1-input" class="hidden">Digit 1</label>
                            <input type="text"
                                class="text-lg text-center form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                required placeholder="0" onkeyup="moveToNext(1, event)" maxlength="1" id="digit1-input">
                        </div>
                        <div>
                            <label for="digit2-input" class="hidden">Digit 2</label>
                            <input type="text"
                                class="text-lg text-center form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                required placeholder="0" onkeyup="moveToNext(2, event)" maxlength="1" id="digit2-input">
                        </div>

                        <div>
                            <label for="digit3-input" class="hidden">Digit 3</label>
                            <input type="text"
                                class="text-lg text-center form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                required placeholder="0" onkeyup="moveToNext(3, event)" maxlength="1" id="digit3-input">
                        </div>

                        <div>
                            <label for="digit4-input" class="hidden">Digit 4</label>
                            <input type="text"
                                class="text-lg text-center form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                required placeholder="0" onkeyup="moveToNext(4, event)" maxlength="1" id="digit4-input">
                        </div>
                    </div>
                    <div class="mt-10">
                        <button type="submit"
                            class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @push('scripts')
        <script src="{{ URL::asset('build/js/pages/auth-two-steps.init.js') }}"></script>
    @endpush
