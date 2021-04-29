@extends('layouts.layout')

<!-- https://github.com/datameet/railways api -->

@section('content')
<div class="container-fluid">
    <div class="row m-md-1">
        <center>
            <div class="col-8 hidden-sm hidden-xs">
                <div class="search-panel1">
                    <div class="row">
                        <h2><strong>Add Train</strong></h2>
                    </div>
                    <form autocomplete="off" style="padding: 1% 5% 5% 5%" action="train-submit" method="post">
                        @csrf
                        <div class="row">
                                <label>Train Name : </label>
                                <select class="form-control text-center" id="trainname-dropdown" name="train_name" required>
                                <input type="text" id="trainid_box" name="train_no" required/>
                            </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="row">
                                        <label>Enter Source : </label>
                                        <select class="form-control text-center" id="source-dropdown" name="source_loc" disabled required></select>
                                    </div>
                                    <div class="row">
                                        <label>Enter Departure Time : </label>
                                        <input type="datetime-local" step="1" class="form-control text-center" id="source_time" name="source_time" required="">
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <label>Enter Destination : </label>
                                        <input type="text" class="form-control text-center" id="destination-dropdown" name="destination_loc" readonly requiired>
                                    </div>
                                    <div class="row">
                                        <label>Enter Arrival Time : </label>
                                        <input type="datetime-local" step="1" class="form-control text-center" id="destination_time" name="destination_time" placeholder="" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px"><label>Catagory : </label></div>
                                <div class="row">
                                    <div class="col-md-3 cat">
                                        <label class="form-check-label" for="1a">First Class AC(1A)</label>
                                        <input class="form-check-input" type="checkbox" name="1a" id="1a" onclick="catagorycheck(this.id)">
                                        <div class="row" id="1a-items" style="display:none">
                                            <label class="form-check-label" for="">Seats : </label>
                                            <input class="form-control text-center" type="number" name="1a-seats" id="1a-seats" min=0>
                                            <label class="form-check-label" for="">Prize Per Seat : </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">₹</span>
                                                <input type="number" class="form-control" type="text" name="1a-prize" id="1a-prize">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cat">
                                        <label class="form-check-label" for="2a">Second Class AC(2A)</label>
                                        <input class="form-check-input" type="checkbox" name="2a" id="2a" onclick="catagorycheck(this.id)">
                                        <div class="row" id="2a-items" style="display:none">
                                            <label class="form-check-label" for="">Seats : </label>
                                            <input class="form-control text-center" type="number" name="2a-seats" id="2a-seats" min=0>
                                            <label class="form-check-label" for="">Prize Per Seat : </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">₹</span>
                                                <input class="form-control" type="number" name="2a-prize" id="2a-prize">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cat">
                                        <label class="form-check-label" for="3a">Third Class AC(3A)</label>
                                        <input class="form-check-input" type="checkbox" name="3a" id="3a" onclick="catagorycheck(this.id)">
                                        <div class="row" id="3a-items" style="display:none">
                                            <label class="form-check-label" for="">Seats : </label>
                                            <input class="form-control text-center" type="number" name="3a-seats" id="3a-seats" min=0>
                                            <label class="form-check-label" for="">Prize Per Seat : </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">₹</span>
                                                <input class="form-control" type="number" name="3a-prize" id="3a-prize">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 cat">
                                        <label class="form-check-label" for="fc">First Class(FC)</label>
                                        <input class="form-check-input" type="checkbox" name="fc" id="fc" onclick="catagorycheck(this.id)">
                                        <div class="row" id="fc-items" style="display:none">
                                            <label class="form-check-label" for="">Seats : </label>
                                            <input class="form-control text-center" type="number" name="fc-seats" id="fc-seats" min=0>
                                            <label class="form-check-label" for="">Prize Per Seat : </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">₹</span>
                                                <input class="form-control" type="number" name="fc-prize" id="fc-prize">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cat">
                                        <label class="form-check-label" for="cc">Chair Car(CC)</label>
                                        <input class="form-check-input" type="checkbox" name="cc" id="cc" onclick="catagorycheck(this.id)">
                                        <div class="row" id="cc-items" style="display:none">
                                            <label class="form-check-label" for="">Seats : </label>
                                            <input class="form-control text-center" type="number" name="cc-seats" id="cc-seats" min=0>
                                            <label for="">Prize Per Seat : </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">₹</span>
                                                <input class="form-control" type="number" name="cc-prize" id="cc-prize">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cat">
                                        <label for="sl">Sleeper(SL)</label>
                                        <input class="form-check-input" type="checkbox" name="sl" id="sl" onclick="catagorycheck(this.id)">
                                        <div class="row" id="sl-items" style="display:none">
                                            <label class="form-check-label" for="">Seats : </label>
                                            <input class="form-control text-center" type="number" name="ss-seats" id="sl-seats" min=0>
                                            <label class="form-check-label" for="">Prize Per Seat : </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">₹</span>
                                                <input class="form-control" type="number" name="sl-prize" id="sl-prize">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 cat">
                                        <label class="form-check-label" for="2s">Second Seating(2S)</label>
                                        <input class="form-check-input" type="checkbox" name="2s" id="2s" onclick="catagorycheck(this.id)">
                                        <div class="row" id="2s-items" style="display:none">
                                            <label class="form-check-label" for="">Seats : </label>
                                            <input class="form-control text-center" type="number" name="2s-seats" id="2s-seats" min=0>
                                            <label class="form-check-label" for="">Prize Per Seat : </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">₹</span>
                                                <input class="form-control" type="number" name="2s-prize" id="2s-prize">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <center>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary" onclick="submitValidation()">Add Train</button>
                            </center>
                        </form>
                    </div>
                </center>
            </div>
        </div>
        <script src="{{url('javascript/trainDetails.js')}}"></script>
        @endsection
