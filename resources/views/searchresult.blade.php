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
                        <!-- <div class="col-lg-2">
                            <div class="row">
                                <input type="date" class="form-control text-center search-panel1-input" id="on" name="date" placeholder="&#65 Date">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="row">
                                <select class="form-select text-center search-panel1-input" aria-label="Default select example">
                                    <option selected><i class="fas fa-briefcase"></i> All Classes</option>
                                    <option value="1">First Class</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary search-panel1-input"><i class="fas fa-search"></i> Search</button>
                        </div>
                    </div>
                </form>

</div>
@foreach($trainArr as $train)
@if (strpos(strtoupper($train->Source_Location),strtoupper($from)) !== false)
    @if (strpos(strtoupper($train->Destination),strtoupper($to)) !== false)
        <div class="search-panel2">
            <div class="row">
                <h2><strong>{{$train->Train_Name}}(Train No : {{$train->Train_No}})</strong></h2>
            </div>
            <div class="row station-details">
                <div class="col-lg-6">
                    <div class="row">
                        <strong>{{$train->Departure_Time}}</strong>
                        </div>
                    <div class="row">
                        <strong>{{$train->Source_Location}}</strong>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row toright">
                        <strong>{{$train->Arrival_Time}}</strong>
                    </div>
                    <div class="row toright">
                        <strong>{{$train->Destination}}</strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="button" onclick="">Book Ticket</button>
            </div>
        </div>
    @endif
@endif
@endforeach
@endsection