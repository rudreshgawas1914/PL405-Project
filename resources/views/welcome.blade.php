@extends('layouts.layout')

@section('content')
<div class="container-fluid" style="margin: 0">
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
										<input type="text" class="form-control text-center" id="From" name="from" placeholder="&#xf124 From">
									</div>
								</div>
								<div class="col-lg-2"></div>
								<div class="col-lg-5">
									<div class="row">
										<input type="text" class="form-control text-center" id="To" name="to" placeholder="&#xf3c5 To">
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
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: 100px;">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="{{url('images/slider1.jpg')}}" alt="First slide" style="width: 100%;height: 400px;object-fit: scale-down;">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="{{url('images/slider1.jpg')}}." alt="Second slide" style="width: 100%;height: 400px;object-fit: scale-down;>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="{{url('images/slider1.jpg')}}" alt="Third slide" style="width: 100%;height: 400px;object-fit: scale-down;>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
@endsection