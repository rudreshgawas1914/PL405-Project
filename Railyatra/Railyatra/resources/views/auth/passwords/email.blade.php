@extends('railyatra.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
        <div class="panel panel-login">
        <div class="card-md-12 border-0">
        <div class="card-header bg-white border-0 text-center"><h2 style="color: rgb(0, 36, 194);">Reset Password</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                            <input
                            type="submit"
                            name="register-submit"
                            id="register-submit"
                            tabindex="4"
                            class="form-control btn btn-register"
                            value="Send Password Reset Link"
                          />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
