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
    <h5 class="card-title">{{$ticket->name}}</h5>S
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    @if($ticket->status!="cancelled")
    <a href="#" class="btn btn-primary">Cancel Ticket</a>
    @endif 
  </div>
</div>
@endforeach
</div>
@endsection