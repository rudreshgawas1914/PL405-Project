@extends('layouts.layout')

@section('content')

<div class="search-panel1">
					<div class="row text-center">
						<h1><strong>Booking Railway</strong></h1>
						<h2>{{$train->Train_Name}} going from {{$train->Source_Location}} to {{$train->Destination}}</h2>
					</div>
					<div id="create">
					<div>
					Enter The Number Of Seats To Be Booked.
					</div>
						<input type="number" name="no-passenger" value="no-passenger" id="no-passenger">
						<button  class="btn btn-primary" onClick="create({{$train}})">OK</button>
					</div>
				
					<form action="store_ticket/{{$train->id}}/{{$userid}}">
					@csrf
						<input type="hidden" name="count" id="">
						<div id="container" class="bg-warning"></div>
						<input type="hidden" name="train-id" value="{{$train->id}}" id="">
						<button type="submit" id="book" class="btn btn-primary" >Book</button>
					</form>

					<!-- <form autocomplete="off" style="padding: 1% 5% 5% 5%" >
									
							<div class="row">

							<div class="col-lg-5">
									<div class="row">
										<input type="text" class="form-control text-center" id="tain" name="form" placeholder="name">
									</div>
								</div>

								<div class="row">
									<div class="col-lg-5">
										<div class="row">
											<input type="text" class="form-control text-center" id="date" name="date" placeholder="Date Of Booking">
										</div>
									</div>
								</div>
						
								<div class="row">
									 <div class="col-lg-5">
										<div class="row">
											<input type="text" class="form-control text-center" id="From" name="form" placeholder="from">
										</div>
								</div>

								<div class="col-lg-2"></div>

								<div class="col-lg-5">
									<div class="row">
										<input type="text" class="form-control text-center" id="To" name="to" placeholder="to">
									</div>
								</div>

								<div class="row">
								<div class="col-lg-5">
								<select class="form-select text-center"  name="classes" required>
								<option value="" disabled selected hidden>choose class</option>
									<option value="1">Fitst class (1A)</option>
									<option value="2">Second class (2A)</option>
									<option value="3">Third Class AC(3A)</option>
									<option value="4"> First Class (Fc)</option>
									<option value="4"> AC Chair Class (CC)</option>
									<option value="5">Sleeper Class (SL</option>
									<option value="6">Second Class (2S)</option>
								
								</select>
							</div>
							</div>
						</div>
					

								<div class="row">
									 <div class="col-lg-5">
										<div class="row">
											<input type="text" class="form-control text-center" id="seats" name="seats" placeholder="Number Of Seats">
										</div>
								</div>

								<div class="row">
									 <div class="col-lg-5">
										<div class="row">
											<input type="text" class="form-control text-center" id="adult" name="adult" placeholder="Number Of Adults">
										</div>
								</div>

								<div class="col-lg-2"></div>

							
									 <div class="col-lg-5">
										<div class="row">
											<input type="text" class="form-control text-center" id="children" name="children" placeholder="Number Of Children">
										</div>
								</div>
								
							<div class="col-lg-2"></div>
						
					
									
						
							


					<div class="row text-center">
						<h2><strong>Passenger Details</strong></h2>
					</div>

					
					

					<div>
							<table id="person">
									<tr>
										<th >Choose class</th>
										<th >NAME</th>
										<th>SEX(male/femail)</th>
										<th>AGE</th>
										<th>LOCAL ADDRESS</th>
										<th>PHONE NUMBER</th>
										<th>EMAIL ADDRESS</th>

									</tr>

									<tr>
										<th>
										<select class="form-select text-center"  name="classes" required>
										<option value="" disabled selected hidden>choose class</option>
										<option value="1">Fitst class (1A)</option>
										<option value="2">Second class (2A)</option>
										<option value="3">Third Class AC(3A)</option>
										<option value="4"> First Class (Fc)</option>
										<option value="4"> AC Chair Class (CC)</option>
										<option value="5">Sleeper Class (SL</option>
										<option value="6">Second Class (2S)</option>
										</select>
										
										</th>      
										<th><INPUT TYPE="TEXT" NAME="name" SIZE="15"></th>
										<th><select class="form-select text-center"  name="gender" required>
										<option value="" disabled selected hidden>choose</option>
										<option value="1">Male</option>
										<option value="2">Female</option>
										</select>
										</th>
										<th><INPUT TYPE="number" NAME="age" SIZE="15"></th>
										<th><INPUT TYPE="TEXT" NAME="address" SIZE="15"></th>
										<th><INPUT TYPE="number" NAME="phone" SIZE="15"></th>
										<th><INPUT TYPE="TEXT" NAME="email" SIZE="15"></th>
									</tr>
							</table>
					</div>
					<center><button  class="btn btn-primary" onclick="addperson()"><i class="fas   fa-plus"></i>  </button></center>
					<center><button type="submit" class="btn btn-primary"><i class="fas  "></i> Book Ticket  </button></center>
				</form>  -->
			</div>
			
			<!-- </center> -->
		</div>

		<script src="{{url('javascript/bookticket.js')}}"></script>
@endsection