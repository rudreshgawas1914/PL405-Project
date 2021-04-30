@extends('layouts.layout')

@section('content')
<h2 class="text-center"><strong>Admin Dashboard</strong></h2>
<div class="display-trains row">
    @foreach($trainArr as $train)
        @if($train->Status=='Active')
            <div class="card col-lg-2 text-center train-box" style="background-color: lightgreen">
        @elseif($train->Status=='Scheduled')
            <div class="card col-lg-2 text-center train-box bg-warning">
        @elseif($train->Status=='Completed')
            <div class="card col-lg-2 text-center train-box bg-info">
        @elseif($train->Status=='Cancelled')
            <div class="card col-lg-2 text-center train-box bg-danger">
        @else
            <div class="card col-lg-2 text-center train-box bg-info">
        @endif
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
                <h4 class="card-title" style="height: 100px;overflow: auto">Train Name : {{$train->Train_Name}}({{$train->Train_No}})</h4>
                <p class="card-text">
                    <div class="RouteTitle"><h3>{{$train->Status}}</h3></div>
                    
                    <div class="RouteTitle">Start Point</div>
                    <div class="RouteDesc">{{$train->Source_Location}}</div>
                    <div class="RouteTime row">
                        <div class="col">
                            {{$train->Departure_Time}}
                        </div>
                        <button class="col-md-1" style="background-color: inherit;border:none;padding: 0;margin: 0" onclick="editArrivalTime('{{$train->id}}',this,'{{$train->Departure_Time}}','{{$train->Arrival_Time}}')">
                            <i class="fas fa-edit"></i>
                        </button></div>
                    <div class="RouteTitle">End Point</div>
                    <div class="RouteDesc">{{$train->Destination}}</div>
                    <div class="RouteTime row">
                        <div class="col">
                            {{$train->Arrival_Time}}
                        </div>
                        <button class="col-md-1" style="background-color: inherit;border:none;padding: 0;margin: 0" onclick="editDepartureTime('{{$train->id}}',this,'{{$train->Departure_Time}}')">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                </p>
                <button type="button" onclick="window.location.href='train-updateform/{{$train->id}}'">View</button>
                <button type="button" onclick="window.location.href='train-delete/{{$train->id}}'">Delete</button>
                <div class="col">
                    <form action="train-statuschange/{{$train->id}}">
                        <label>Status : </label>
                        <select class="form-select text-center status" name="status" aria-label="Default select example">
                            <option selected>{{$train->Status}}</option>
                            @if($train->Status!='Active')<option value="Active">Active</option>@endif
                            @if($train->Status!='Scheduled')<option value="Scheduled">Scheduled</option>@endif
                            @if($train->Status!='Completed')<option value="Completed">Completed</option>@endif
                            @if($train->Status!='Cancelled')<option value="Cancelled">Cancelled</option>@endif
                        </select>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Change Status</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <div class="card col-lg-2 text-center align-items-center justify-content-center train-box border-0 bg-transparent">
            <button class="addbtn" style="width: 100px;height : 100px"> <img src="{{url('images/add.png')}}" class="logo" alt="logo" onclick="window.location.href='train-create'"/></button>
        </div>
    </div>
    <script src="{{url('javascript/admindash.js')}}"></script>
    @endsection