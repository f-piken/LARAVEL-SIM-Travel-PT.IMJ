@extends('layouts.master-without-nav')
@section('title')
    {{ __('Login') }}
@endsection
@section('content')
<body class="flex items-center justify-center min-h-screen px-4 py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public">
    <div class="mb-0 border-none shadow-xl xl:w-2/3 card bg-white/80 dark:bg-zink-500/80 rounded-lg">
        <div class="grid grid-cols-1 gap-0 lg:grid-cols-12">
            <div class="lg:col-span-5 bg-gradient-to-tl from-purple-600 to-indigo-600 rounded-tl-lg rounded-bl-lg text-white" style="margin-top: 72px">
                <div class="!px-12 !py-12 card-body">
                    <div class="text-center mb-6">
                        <h4 class="text-2xl font-semibold mb-2 text-purple-500">{{ __('Welcome Back!') }}</h4>
                        <p class="font-medium text-slate-500">{{ __('Sign in to continue to SIM IMJ.') }}</p>
                    </div>

                    @if ($errors->has('login'))
                        <div class="font-medium text-sm text-red-600 border border-transparent rounded-md bg-red-50 px-4 py-3 mt-4">
                            {{ $errors->first('login') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="mt-2" id="signInForm">
                        @csrf
                        <div class="mb-6">
                            <x-label for="username" value="{{ __('Username') }}" class="font-semibold text-lg" />
                            <x-input id="username" class="block mt-1 p-2 w-full rounded-md border-2 focus:ring-2 focus:ring-indigo-500 text-slate-800" type="text" name="username" required autofocus autocomplete="username" placeholder="Enter your username" />
                            <x-input-error for="username" />
                        </div>

                        <div class="mb-6">
                            <div class="flex justify-between">
                                <x-label for="password" value="{{ __('Password') }}" class="font-semibold text-lg" />
                            </div>
                            <div class="relative">
                                <x-input id="password" class="block mt-1 p-2 w-full pr-10 rounded-md border-2 focus:ring-2 focus:ring-indigo-500 text-slate-800" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
                                <i id="togglePassword" class="ri-eye-line absolute top-3 right-3 transform -translate-y-1/2 cursor-pointer text-gray-500"></i>
                            </div>
                            <x-input-error for="password" />
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="w-full text-white btn bg-indigo-600 border-indigo-600 hover:bg-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 hover:text-white active:text-white active:bg-indigo-700 transition duration-200 ease-in-out rounded-lg py-2">
                                {{ __('Sign In') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mx-2 mt-2 mb-2 border-none shadow-xl lg:col-span-7 bg-gradient-to-tr from-blue-500 to-teal-500 rounded-tr-lg rounded-br-lg">
                <div class="!px-10 !pt-10 h-full !pb-0 card-body flex flex-col justify-between text-center text-white">
                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="grow">
                            <a href="{{ url('index') }}" class="text-xl font-bold text-purple-500">SIM PT. Ikhwanin Mulyojoyo</a>
                        </div>
                    </div>

                    <div class="mt-auto">
                        <img src="{{ URL::asset('build/images/auth/img-01.png') }}" alt="Image" class="md:max-w-[32rem] mx-auto shadow-lg rounded-lg opacity-80 hover:opacity-100 transition duration-300 ease-in-out">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

@push('scripts')
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Change the icon based on visibility
            this.classList.toggle('ri-eye-line');
            this.classList.toggle('ri-eye-off-line');
        });
    </script>
@endpush