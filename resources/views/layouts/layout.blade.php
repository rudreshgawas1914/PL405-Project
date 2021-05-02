<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RailwayManagement</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
  <link rel="shortcut icon" href="{{ asset('railyatralogo.ico') }}">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://kit.fontawesome.com/cb2526f9d7.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="header">
    @section('header')
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(0, 36, 194);">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{url('images/railyatralogo.png')}}" class="logo" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="col-md-10">
            <ul class="navbar-nav">
              @guest
                @if (Route::has('login'))
                  @auth
                    <li class="nav-item">
                      <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                  @else
                    <li class="nav-item">
                      <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#"><i class="fas fa-ticket-alt"></i> Book Tickets</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#"><i class="fas fa-train"></i> Track Your Train</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">About Us</a></li>
                        <li><a class="dropdown-item" href="#">Contact Us</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Getting Started</a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" id="loginpage" href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                          <li><a class="dropdown-item" id="registrationpage" href="{{ route('register') }}">Register</a></li>
                        @endif
                      </ul>
                    </li>
                  @endauth
                @endif
              @else
              @if(Auth::user()->hasRole("user"))
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fas fa-ticket-alt"></i> Book Tickets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fas fa-train"></i> Track Your Train</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/user_dashboard">User Dashboard</a>
              </li>
              @elseif(Auth::user()->hasRole("admin"))
              <li class="nav-item">
                <a class="nav-link text-white" href="dashboard"><i class="fas fa-home"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="admin/userlist">Users</a>
              </li>
              @else
              @foreach(DB::table('permission_role')->get() as $user)
                @if($user->permission_id==Auth::user()->id)
                  @if($user->role_id==1)
                  <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard"><i class="fas fa-home"></i>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="admin/userlist">Users</a>
                  </li>
                  @else
                    <li class="nav-item">
                      <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#"><i class="fas fa-ticket-alt"></i> Book Tickets</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#"><i class="fas fa-train"></i> Track Your Train</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="profile">Profile</a>
                    </li>
                  @endif
                @endif
              @endforeach
              @endif
              <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">About Us</a></li>
                  <li><a class="dropdown-item" href="#">Contact Us</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </li>
                </ul>
              </li>
              @endguest
              </i>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    @show

    <div class="content">
      @section('content')

      @show
    </div>
    
    <div class="footer">
      @section('footer')
      <footer class="text-center text-lg-start text-white" style="background-color: rgb(0, 36, 194);width:100%;">
        <!-- Grid container -->
        <div class="container  p-4 pb-0">
          <!-- Section: CTA -->
          <section class="">
            <p class="d-flex justify-content-center align-items-center">
              <span class="me-3">Register for free</span>
              <button type="button" class="btn btn-outline-light btn-rounded">
                Sign up!
              </button>
            </p>
          </section>
          <!-- Section: CTA -->

          <hr class="mb-4" />

          <!-- Section: Social media -->
          <section class="mb-4 text-center">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2021 Copyright:
          <a class="text-white" href="">railyatri.com</a>
        </div>
        <!-- Copyright -->
      </footer>
    </div>
    @show

    <script src="{{url('javascript/main.js')}}"></script>
</body>

</html>