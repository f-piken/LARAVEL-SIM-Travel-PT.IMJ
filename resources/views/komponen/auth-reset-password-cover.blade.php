@extends('layouts.master-without-nav')
@section('title')
    {{ __('Reset Password') }}
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
                    <h4 class="mb-2 text-custom-500">Forgot Password?</h4>
                    <p class="mb-8 text-slate-500">Reset your Tailwick password</p>
                </div>

                <div
                    class="px-4 py-3 mb-6 text-sm text-yellow-500 border border-transparent rounded-md bg-yellow-50">
                    Provide your email address, and instructions will be sent to you
                </div>

                <form autocomplete="off" action="index.html">
                    <div>
                        <label for="emailInput" class="inline-block mb-2 text-base font-medium">Email</label>
                        <input type="text"
                            class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            required placeholder="Enter email" id="emailInput">
                    </div>
                    <div class="mt-8">
                        <button type="submit"
                            class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Send
                            Reset Link</button>
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">Wait, I remember my password... <a href="{{ url('auth-login-cover') }}"
                                class="underline fw-medium text-custom-500"> Click here </a> </p>
                    </div>
                </form>
            </div>
        </div>
    @endsection
