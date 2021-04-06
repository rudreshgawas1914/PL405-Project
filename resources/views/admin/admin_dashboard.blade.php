@extends('layouts.adminlayout')

@section('content')
<h2 class="text-center"><strong>Admin Dashboard</strong></h2>
<div class="display-trains row">
    @foreach($trainArr as $train)
    <div class="card col-lg-2 text-center train-box bg-warning">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <h4 class="card-title">Train Name : {{$train->Train_Name}}</h4>
            <p class="card-text">
            <div class="RouteTitle">Start Point</div>
            <div class="RouteDesc">{{$train->Source_Location}}</div>
            <div class="RouteTime">{{$train->Departure_Time}}</div>
            <div class="RouteTitle">End Point</div>
            <div class="RouteDesc">{{$train->Destination}}</div>
            <div class="RouteTime">{{$train->Arrival_Time}}</div>
            </p>
            <button type="button" onclick="gotoroute('Edit')">Edit</button>
            <button type="button" onclick="window.location.href='train-delete/{{$train->id}}'">Delete</button>
        </div>
    </div>
    @endforeach
    <!-- <div class="card col-lg-2 text-center train-box bg-warning">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <h4 class="card-title">Train Name : </h4>
            <p class="card-text">
            <div class="RouteTitle">Start Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            <div class="RouteTitle">End Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            </p>
            <button type="button" onclick="gotoroute('Edit')">Edit</button>
        </div>
    </div>

    <div class="card col-lg-2 text-center train-box bg-warning">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <h4 class="card-title">Train Name : </h4>
            <p class="card-text">
            <div class="RouteTitle">Start Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            <div class="RouteTitle">End Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            </p>
            <button type="button" onclick="gotoroute('Edit')">Edit</button>
        </div>
    </div>

    <div class="card col-lg-2 text-center train-box bg-success">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <h4 class="card-title">Train Name : </h4>
            <p class="card-text">
            <div class="RouteTitle">Start Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            <div class="RouteTitle">End Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            </p>
            <button type="button" onclick="gotoroute('Edit')">Edit</button>
        </div>
    </div>

    <div class="card col-lg-2 text-center train-box bg-warning">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <h4 class="card-title">Train Name : </h4>
            <p class="card-text">
            <div class="RouteTitle">Start Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            <div class="RouteTitle">End Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            </p>
            <button type="button" onclick="gotoroute('Edit')">Edit</button>
        </div>
    </div>

    <div class="card col-lg-2 text-center train-box bg-success">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <h4 class="card-title">Train Name : </h4>
            <p class="card-text">
            <div class="RouteTitle">Start Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            <div class="RouteTitle">End Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            </p>
            <button type="button" onclick="gotoroute('Edit')">Edit</button>
        </div>
    </div>
    <div class="card col-lg-2 text-center train-box bg-secondary">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <h4 class="card-title">Train Name : </h4>
            <p class="card-text">
            <div class="RouteTitle">Start Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            <div class="RouteTitle">End Point</div>
            <div class="RouteDesc">Place Name</div>
            <div class="RouteTime">Time</div>
            </p>
            <button type="button" onclick="gotoroute('Edit')">Edit</button>
        </div>
    </div> -->
    <div class="card col-lg-2 text-center align-items-center justify-content-center train-box border-0 bg-transparent">
        <button class="addbtn" style="width: 100px;height : 100px"> <img src="{{url('images/add.png')}}" class="logo" alt="logo" /></button>
    </div>
</div>
@endsection
