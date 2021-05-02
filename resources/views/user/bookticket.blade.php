@extends('layouts.layout')

@section('content')

<div class="search-panel1">
					<div id="create">
						<div>
						Enter The Number Of Seats To Be Booked.
						</div>
						<input type="number" name="no-passenger" value="no-passenger" id="no-passenger">
						<button  class="btn btn-primary" onClick="create({{$train}})">OK</button>
					</div>

					<form action="ticket" method="post">
						@csrf
						<input type="hidden" name="count" id="count">
						<div id="container" class="bg-warning"></div>
						<input type="hidden" name="train-id" value="{{$train->id}}" id="">
						<button type="submit" id="book" class="btn btn-primary" >Book</button>
					</form>
			</div>
			
			<!-- </center> -->
		</div>

		<script src="{{url('javascript/bookticket.js')}}"></script>
@endsection