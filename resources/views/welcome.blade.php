@extends('layouts.layout')

@section('content')
	<!-- <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body> -->

    <div class="container-fluid">
	<div class="row m-md-1">
		<div class="col-lg-7 hidden-sm hidden-xs">
			<!-- <center> -->
			<div class="search-panel1">
				<div class="row text-center">
					<h2><strong>Booking Ticket</strong></h2>
				</div>
				<form autocomplete="off" style="padding: 1% 5% 5% 5%" action="searchresult">
				@csrf
					<!-- <div class="row bg-warning"> -->
					<div class="row">
						<div class="col-lg-5">
							<div class="row">
								<input type="text" class="form-control text-center" id="From" name="from" placeholder="&#xf124 From" requiired>
							</div>
						</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-5">
							<div class="row">
								<input type="text" class="form-control text-center" id="To" name="to" placeholder="&#xf3c5 To" required>
							</div>
							<!-- <div class="row">
								<input type="date" class="form-control text-center" id="on" name="date" placeholder="&#65 Date">
							</div>
							<div class="row">
								<select class="form-select text-center" aria-label="Default select example">
									<option selected><i class="fas fa-briefcase"></i> All Classes</option>
									<option value="1">First Class</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<input type="text" class="form-control text-center" id="catagory" placeholder="catagory">
							</div> -->
						</div>
					</div>
					<center><button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button></center>
				</form>
			</div>
			<!-- </center> -->
		</div>

		<!-- <div class="col-lg-1 col-md-3 hidden-sm bg-white hidden-xs leftTitle">
        </div> -->
		<!-- class="text-white" -->
		<div class="col-lg-5 text-white hidden-sm hidden-xs justify-content-center">
			<center>
				<br><br>
				<img src="{{url('images/railyatralogo.png')}}" alt="logo" style="width : 100px;height : auto" />
				<h1><strong>INDIAN RAILWAYS</strong></h1>
				<H3>| Safety | Security | Punctuality |</H3>
			</center>
		</div>
	</div>
	<div class="row m-md-1">
		<img src="{{url('images/bg2.jpg')}}" alt="logo" style="padding-top: 20px; width: 100%;height: auto;" />
	</div>
</div>
@endsection