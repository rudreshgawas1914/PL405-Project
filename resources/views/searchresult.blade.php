@extends('layouts.layout')

@section('content')
<div class="search-panel1">
    <div class="row text-center">
        <h4><strong>Search Train</strong></h4>
    </div>
    <form autocomplete="off" style="padding: 1% 1% 3% 1%" action="searchresult">
                @csrf
                    <div class="row bg-warning">
                        <div class="col-lg-2" style="margin-right: 15px;">
                            <div class="row">
                                <input type="text" class="form-control text-center search-panel1-input" id="From" name="from" placeholder="&#xf124 From" required>
                            </div>
                        </div>
                        <div class="col-lg-2" style="margin-right: 15px;">
                            <div class="row">
                                <input type="text" class="form-control text-center search-panel1-input" id="To" name="to" placeholder="&#xf3c5 To" required>
                            </div>
                        </div>

                        <!--
                        <div class="col-lg-2" style="margin-right: 15px;">
                            <div class="row">
                                <input type="date" class="form-control text-center search-panel1-input" id="on" name="date" placeholder="&#65 Date">
                            </div>
                        </div>
                        <div class="col-lg-2" style="margin-right: 15px;">
                            <div class="row">
                                <select class="form-select text-center search-panel1-input" aria-label="Default select example">
                                    <option selected><i class="fas fa-briefcase"></i> All Classes</option>
                                    <option value="1">First Class</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    -->
                        <div class="col-lg-2" >
                            <div class="row">
                                <button type="submit" class="btn btn-primary search-panel1-input"><i class="fas fa-search"></i> Search</button>
                            </div>
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
            
                
            <div class="btn" style="margin-left: 70%;"><button type="button" class="btn btn-primary" onclick=""><i class="fas fa-search"></i>Book Ticket</button></div>
            
        </div>
    @endif
@endif
@endforeach
@endsection