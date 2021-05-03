@extends('layouts.layout')

@section('content')

<div class="search-panel1">
	<h2 class="text-center">Ticket booking for {{$train->Train_Name}}</h2>
	<div id="create">
		<div>
			Enter The Number Of Seats To Be Booked.
		</div>
		<input type="number" name="no-passenger" value="no-passenger" id="no-passenger" min=1>
		<button  class="btn btn-primary" onClick="create({{$train}})">OK</button>
	</div>
	<form autocomplete="off" action="ticket" method="post">
		@csrf
		<input type="hidden" name="count" id="count">
		<div id="container"></div>
		<input type="hidden" name="cat" value="{{$cat}}" id="">
		<input type="hidden" name="train-id" value="{{$train->id}}" id="">
		<button type="submit" id="book" class="btn btn-primary">Book</button>
	</form>
</div>

		<script src="{{url('javascript/bookticket.js')}}"></script>
@endsection