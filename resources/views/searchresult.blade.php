@extends('layouts.layout')

@section('content')
<div class="search-panel1">
    <div class="row text-center">
        <h4><strong>Search Results</strong></h4>
    </div>
    <form autocomplete="off" style="padding: 1% 1% 5% 1%" action="searchresult">
                @csrf
                    <div class="row align-center">
                        <div class="col-lg-3">
                                <input type="text" class="form-control text-center search-panel1-input" id="From" name="from" placeholder="&#xf124 From" requiired>
                        </div>
                        <div class="col-lg-3">
                                <input type="text" class="form-control text-center search-panel1-input" id="To" name="to" placeholder="&#xf3c5 To" required>
                        </div>
                        <div class="col-lg-2" >
                            <div class="row">
                                <button type="submit" class="btn btn-primary search-panel1-input"><i class="fas fa-search"></i> Search</button>
                        </div>
                    </div>
                </form>
            </div>
@foreach($trainArr as $train)
@if (strpos(strtoupper($train->Source_Location),strtoupper($from)) !== false)
    @if (strpos(strtoupper($train->Destination),strtoupper($to)) !== false)
        <div class="panel-create-train">          
            <div class="trainName">
                <h4>{{$train->Train_Name}} &emsp; Train : {{$train->Train_No}} &nbsp;
                <button type="button" class="btn btn-link">CHECK SEATS</button></h4></div>
            
            <div class="trainTime">
                 {{$train->Departure_Time}} || {{$train->Source_Location}}
                    &emsp;
                 {{$train->Arrival_Time}} || {{$train->Destination}}
            </div>  
            <div class="btn" style="margin-left: 70%;"><button type="button" class="btn btn-primary" onclick="window.location.href='bookticket/{{$train->id}}'"><i class="fas fa-search"></i>Book Ticket</button></div>
        </div>
    @endif
@endif
@endforeach
@endsection