@extends('layouts.layout')

@section('content')
<div class="search-panel1">
    <div class="row text-center">
        <h4><strong>Search Results</strong></h4>
    </div>
    <form autocomplete="off" style="padding: 1% 1% 5% 1%" action="searchresult">
                @csrf
                    <div class="row bg-warning">
                        <div class="col-lg-2">
                            <div class="row">
                                <input type="text" class="form-control text-center search-panel1-input" id="From" name="from" placeholder="&#xf124 From" requiired>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="row">
                                <input type="text" class="form-control text-center search-panel1-input" id="To" name="to" placeholder="&#xf3c5 To" required>
                            </div>
                        </div>
                        <div class="col-lg-2">
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
                        </div>
                        <div class="col-lg-2">
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
            Train Name : {{$train->Train_Name}}({{$train->Train_No}})
            {{$train->Status}}
            {{$train->Source_Location}}
            {{$train->Departure_Time}}
            {{$train->Destination}}
            {{$train->Arrival_Time}}
            <button type="button" onclick="">Book Ticket</button>
        </div>
    @endif
@endif
@endforeach
@endsection