@extends('layouts.master-without-nav')
@section('title')
    {{ __('Sign In') }}
@endsection
@section('content')

    <body
        class="flex items-center justify-center min-h-screen px-4 py-16 bg-cover bg-auth-pattern font-public">

        <div class="mb-0 border-none shadow-none xl:w-2/3 card bg-white/70">
            <div class="grid grid-cols-1 gap-0 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <div class="!px-12 !py-12 card-body h-full flex flex-col">

                        <div class="my-auto">
                            <div class="text-center">
                                <h4 class="mb-2 text-custom-500">Set a New Password</h4>
                                <p class="mb-8 text-slate-500">Your new password should be distinct from
                                    any of your prior passwords</p>
                            </div>

                            <form autocomplete="off" action="index.html">
                                <div class="mb-3">
                                    <label for="passwordInput"
                                        class="inline-block mb-2 text-base font-medium">Password</label>
                                    <input type="password"
                                        class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                        required placeholder="Password" id="passwordInput">
                                </div>
                                <div class="mb-3">
                                    <label for="passwordConfirmInput"
                                        class="inline-block mb-2 text-base font-medium">Confirm Password</label>
                                    <input type="password"
                                        class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                                        required placeholder="Confirm password" id="passwordConfirmInput">
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="checkboxDefault1"
                                        class="size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 checked:bg-custom-500 checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                        type="checkbox" value="">
                                    <label for="checkboxDefault1"
                                        class="inline-block text-base font-medium align-middle cursor-pointer">Remember
                                        me</label>
                                </div>
                                <div class="mt-8">
                                    <button type="submit"
                                        class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Reset
                                        Password</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">Hold on, I've got my password... <a href="{{ url('auth-login-basic') }}"
                                            class="underline fw-medium text-custom-500"> Click here </a> </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mx-2 mt-2 mb-2 border-none shadow-none lg:col-span-7 card bg-white/60">
                    <div class="!px-10 !pt-10 h-full !pb-0 card-body flex flex-col">
                        <div class="flex items-center justify-between gap-3">
                            <div class="grow">
                                <a href="index">
                                    <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" class="hidden h-6">
                                    <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" class="block h-6">
                                </a>
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown text-end">
                                    <button type="button"
                                        class="inline-flex items-center gap-3 transition-all duration-200 ease-linear dropdown-toggle btn border-slate-200 group/items focus:border-custom-500"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown">
                                        <img src="{{ URL::asset('build/images/flags/us.svg') }}" alt=""
                                            class="object-cover h-5 rounded-full">
                                        <h6
                                            class="text-base font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500">
                                            English</h6>
                                    </button>

                                    <div class="absolute z-50 hidden p-3 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[9rem] flex flex-col gap-3"
                                        aria-labelledby="dropdownMenuButton">
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/us.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500">
                                                English</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/es.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500">
                                                Spanish</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/de.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500">
                                                German</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/fr.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500">
                                                French</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/jp.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500">
                                                Japanese</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/it.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500">
                                                Italian</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/ru.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500">
                                                Russian</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/ae.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500">
                                                Arabic</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <img src="{{ URL::asset('build/images/auth/img-01.png') }}" alt="" class="md:max-w-[32rem] mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
