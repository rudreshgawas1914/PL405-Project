@extends('railyatra.layout')

@section('content')
<div class="container-md">
      <div class="row justify-content-md-center">
        <div class="col-md-9">
          <div class="panel panel-login">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <a href="#" class="active" id="login-form-link">Login</a>
                </div>
                <div class="col-xs-6">
                  <a href="#" id="register-form-link">Register</a>
                </div>
              </div>
              <!-- <hr /> -->
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form
                    id="login-form"
                    action="{{ route('login') }}"
                    method="post"
                    role="form"
                    style="display: block"
                  >@csrf
                    <div class="form-group">
                        <div class="col">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <!-- error message -->
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col bg-warning">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group text-center">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label for="remember"> Remember Me</label>
                    </div>
                    <div class="form-group">
                      <div class="row justify-content-md-center">
                        <div class="col-sm-8">
                          <input
                            type="submit"
                            name="login-submit"
                            id="login-submit"
                            tabindex="4"
                            class="form-control btn btn-login"
                            value="Log In"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="text-center">
                            <a href="{{ route('password.request') }}" tabindex="5" class="forgot-password">
                            @if (Route::has('password.request'))
                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}"> -->
                                Forgot Password?
                            @endif
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <form id="register-form" action="{{ route('register') }}" method="post" role="form" style="display: none">
                  @csrf

<div class="form-group row">
    <div class="col">
        <input placeholder="Enter Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col">
        <input placeholder="Enter Email Id" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<!-- 
  <div class="form-group row">
    <label for="example-date-input" class="col-md-3 col-form-label">Date of Birth</label>
    <div class="col-md-3">
      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
    </div>
    <div class="col-md-6">
      <input class="form-control" type="tel" value="Contact Number" id="example-tel-input">
    </div>
  </div> -->


<div class="form-group row">
    <div class="col">
        <input placeholder="Enter Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


</div>

<div class="form-group row">
    <div class="col">
        <input placeholder="Enter Password Again" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>
<div class="form-group">
                      <div class="row justify-content-md-center">
                        <div class="col-sm-8">
                          <input
                            type="submit"
                            name="register-submit"
                            id="register-submit"
                            tabindex="4"
                            class="form-control btn btn-register"
                            value="Register Now"
                          />
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
