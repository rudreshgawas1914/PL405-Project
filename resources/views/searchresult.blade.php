@extends('layouts.layout')

@section('content')
<div class="search-panel1" style="width: 90%">
    <div class="row text-center">
        <h4><strong>Search Results</strong></h4>
    </div>
    <form autocomplete="off" style="padding: 1% 1% 5% 1%" action="searchresult">
                @csrf
                    <div class="row align-center">
                        <div class="col-lg-3">
                            <input type="text" class="form-control text-center" id="From" name="from" placeholder="&#xf124 From">
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control text-center" id="To" name="to" placeholder="&#xf3c5 To">
                        </div>
                        <div class="col-lg-2" >
                            <div class="row">
                                <button type="submit" class="btn btn-primary search-panel1-input"><i class="fas fa-search"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </form>
@foreach($trainArr as $train)
@if (strpos(strtoupper($train->Source_Location),strtoupper($from)) !== false)
    @if (strpos(strtoupper($train->Destination),strtoupper($to)) !== false)
        <div class="panel-create-train">          
            <div class="trainName">
                <h4>{{$train->Train_Name}} &emsp; Train : {{$train->Train_No}} &nbsp;
                <button type="button" class="btn btn-link" onclick="checkseat(this,'{{$train->id}}','{{$seats}}')">CHECK SEATS</button></h4></div>
            <div class="trainTime">
                 {{$train->Departure_Time}} || {{$train->Source_Location}}
                    &emsp;
                 {{$train->Arrival_Time}} || {{$train->Destination}}
            </div>
            <div class="display-cat" style="display:none">
                <table>
                    <tbody>
                    @foreach($seats as $seat)
                        @if($seat->trainroute_id==$train->id)
                        <tr><th>Seat Catagory</th><th>Available Seats</th><th>Price</th><th></th></tr>
                            @if($seat->Seat_1A)
                                <tr><td>First Class AC</td><td>{{$seat->Seat_1A_availableseats}}</td><td>{{$seat->Seat_1A_seatprice}}</td>
                                <td>
                                <form action="bookticket">
                                    <div class="btn" style="margin-left: 70%;">
                                        <input type="hidden" name="cat" value="1A">
                                        <input type="hidden" name="train-id" value="{{$train->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>Book Ticket
                                        </button>
                                    </div>
                                </form>
                                </td>
                            </tr>
                            @endif
                            @if($seat->Seat_2A)
                                <tr><td>Second Class AC</td><td>{{$seat->Seat_2A_availableseats}}</td><td>{{$seat->Seat_2A_seatprice}}</td>
                                <td>
                                <form action="bookticket">
                                    <div class="btn" style="margin-left: 70%;">
                                        <input type="hidden" name="cat" value="2A">
                                        <input type="hidden" name="train-id" value="{{$train->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>Book Ticket
                                        </button>
                                    </div>
                                </form>
                                </td>
                            </tr>
                            @endif
                            @if($seat->Seat_3A)
                                <tr><td>Third Class AC</td><td>{{$seat->Seat_3A_availableseats}}</td><td>{{$seat->Seat_3A_seatprice}}</td>
                                <td>
                                <form action="bookticket">
                                    <div class="btn" style="margin-left: 70%;">
                                        <input type="hidden" name="cat" value="3A">
                                        <input type="hidden" name="train-id" value="{{$train->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>Book Ticket
                                        </button>
                                    </div>
                                </form>
                                </td>
                            </tr>
                            @endif
                            @if($seat->Seat_FC)
                                <tr><td>First Class</td><td>{{$seat->Seat_FC_availableseats}}</td><td>{{$seat->Seat_FC_seatprice}}</td>
                                <td>
                                <form action="bookticket">
                                    <div class="btn" style="margin-left: 70%;">
                                        <input type="hidden" name="cat" value="FC">
                                        <input type="hidden" name="train-id" value="{{$train->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>Book Ticket
                                        </button>
                                    </div>
                                </form>
                                </td>
                            </tr>
                            @endif
                            @if($seat->Seat_CC)
                                <tr><td>AC Chair Class</td><td>{{$seat->Seat_CC_availableseats}}</td><td>{{$seat->Seat_CC_seatprice}}</td>
                                <td>
                                <form action="bookticket">
                                    <div class="btn" style="margin-left: 70%;">
                                        <input type="hidden" name="cat" value="CC">
                                        <input type="hidden" name="train-id" value="{{$train->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>Book Ticket
                                        </button>
                                    </div>
                                </form>
                                </td>
                            </tr>
                            @endif
                            @if($seat->Seat_SL)
                                <tr><td>Sleeper Class</td><td>{{$seat->Seat_SL_availableseats}}</td><td>{{$seat->Seat_SL_seatprice}}</td>
                                <td>
                                <form action="bookticket">
                                    <div class="btn" style="margin-left: 70%;">
                                        <input type="hidden" name="cat" value="SL">
                                        <input type="hidden" name="train-id" value="{{$train->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>Book Ticket
                                        </button>
                                    </div>
                                </form>
                                </td>
                            </tr>
                            @endif
                            @if($seat->Seat_2S)
                                <tr><td>Second Class</td><td>{{$seat->Seat_2S_availableseats}}</td><td>{{$seat->Seat_2S_seatprice}}</td>
                                <td>
                                <form action="bookticket">
                                    <div class="btn" style="margin-left: 70%;">
                                        <input type="hidden" name="cat" value="2S">
                                        <input type="hidden" name="train-id" value="{{$train->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>Book Ticket
                                        </button>
                                    </div>
                                </form>
                                </td>
                            </tr>
                            @endif
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endif
@endforeach
<script src="{{url('javascript/search.js')}}"></script>
@endsection
