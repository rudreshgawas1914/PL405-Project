@extends('layouts.userlayout')

@section('content')
<div class="container-fluid">
	<div class="row m-md-1">
		<div class="col-lg-7 hidden-sm hidden-xs">
			<!-- <center> -->
			<div class="search-panel1">
				<div class="row">
					<h2><strong>Booking Ticket</strong></h2>
				</div>
				<form style="padding: 1% 5% 5% 5%">
					<!-- <div class="row bg-warning"> -->
					<div class="row">
						<div class="col-lg-5">
							<div class="row">
								<input type="text" class="form-control text-center" id="From" placeholder="&#xf124 From">
							</div>
							<div class="row">
								<input type="text" class="form-control text-center" id="To" placeholder="&#xf3c5 To">
							</div>
						</div>
						<div class="col-lg-1 "></div>
						<div class="col-lg-5">
							<div class="row">
								<input type="date" class="form-control text-center" id="on" placeholder="&#65 Date">
							</div>
							<div class="row">
								<select class="form-select text-center" aria-label="Default select example">
									<option selected><i class="fas fa-briefcase"></i> All Classes</option>
									<option value="1">First Class</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<input type="text" class="form-control text-center" id="catagory" placeholder="catagory">
							</div>
						</div>
					</div>
					<center><button type="submit" class="btn btn-primary">Submit</button></center>
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