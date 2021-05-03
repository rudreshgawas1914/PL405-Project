@extends('layouts.layout')

@section('content')
<div class="row panel-login">
    <h1 class="panel-heading">Registration</h1>
    <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div>
                <label for="name">{{__('Name')}}</label>
                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">{{__('Email')}}</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- select role -->

            <div class="mt-4">
                <x-label for="role_id" :value="__('Register As:')" />

                <select id="role_id" class="form-control" name="role_id" required >
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                </select>

            </div>
            <center>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <br>
                <button class="btn btn-primary" style="margin-top: 20px">
                    {{ __('Register') }}
                </button>
            </div>
            </center>
        </form>
</div>
@endsection
