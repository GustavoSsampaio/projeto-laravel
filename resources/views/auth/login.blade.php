<!--                                                                           HOMEPAGE                                                                                             -->
<!--cria uma extensão para puxar o conteudo da pagina layout.app-->
@extends('layout.acesso')
@section('main')

<body>
<div class="loginBox">
    <h1>Login</h1>
    <p>Entre com sua conta existente</p>

    <!-- Session Status -->
    <p class="mb-4" :status="session('status')" ></p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <p :messages="$errors->get('email')" class="mt-2" ></p>
            </label>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" >

                <p :messages="$errors->get('password')" class="mt-2" ></p>
            </label>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Lembre-se de mim!') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueci minha senha') }}
                </a>
            @endif

            <button class="buttonLog">
                {{ __('Log in') }}
            </button>
        </div>
        <a href="{{route('register')}}">Cadastre-se</a>
    
    </form>

</body>
<!--finaliza com footer-->
@endsection
