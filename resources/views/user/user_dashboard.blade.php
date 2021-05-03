@extends('layouts.layout')

@section('content')
<h1 class="text-center bold">User Dashboard</h1>
<div class="search-panel1">
@foreach($tickets as $ticket)
@if($ticket->status=="booked")
<div class="card bg-white">
@elseif($ticket->status=="cancelled")
<div class="card bg-danger">
@endif
    <div class="card-body">
    <h5 class="card-title">{{$ticket->name}}</h5>
    @foreach($trains as $train)
      @if($train->id==$ticket->train_id)
        <p class="card-text">{{$ticket->class}} ticket of {{$train->Source_Location}} to {{$train->Destination}} on {{$train->Arrival_Time}}</p>
      @endif
    @endforeach
    @if($ticket->status!="cancelled")
    <form action="ticketcancel" method="POST">
      @csrf
    <input type="hidden" name="ticketid" value="{{$ticket->id}}">
    <button type="submit" class="btn btn-primary">Cancel Ticket</button>
    </form>
    @endif 
  </div>
</div>
@endforeach
</div>
@endsection