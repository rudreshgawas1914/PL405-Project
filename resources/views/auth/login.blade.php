@extends('layouts.layout')

@section('content')
<div class="row panel-login">
    <h1 class="panel-heading">Login</h1>
     <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <label for="email">{{__('Email')}}</label>

                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">{{__('Password')}}</label>

                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <center>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <br>
                <button class="btn btn-primary" style="margin-top: 20px">
                    {{ __('Log in') }}
                </button>
            </div>
            </center>
        </form>
</div>
@endsection