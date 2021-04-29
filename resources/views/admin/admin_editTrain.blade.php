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
                    <form autocomplete="off" style="padding: 1% 5% 5% 5%" action="train-submit" method="post" onClick="submitValidation()">
                        @csrf
                        <!-- <div class="row bg-warning"> -->
                        <div class="row">
                                <label>Train Name : </label>
                                <input type="form-control text-center" name="train_name" value="{{$train->Train_Name}}">
                                <input type="text" id="trainid_box" name="train_no"/>
                            </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="row">
                                        <label>Enter Source : </label>
                                        <select class="form-control text-center" id="source-dropdown" name="source_loc" disabled></select>
                                        <!-- <input type="text" id="sourceid_box" name="sourceStation_no"/> -->
                                    </div>
                                    <!-- <div class="row">
                                        <label>Source Country : </label>
                                        <input type="text" class="form-control text-center" id="source_con" name="source_con" readonly requiired>
                                    </div> -->
                                    <div class="row">
                                        <label>Enter Departure Time : </label>
                                        <input type="datetime-local" step="1" class="form-control text-center" id="source_time" name="source_time">
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <label>Enter Destination : </label>
                                        <input type="text" class="form-control text-center" id="destination-dropdown" name="destination_loc" readonly requiired>
                                        <!-- <input type="text" id="destinationid_box" name="destinationStation_no"/> -->
                                    </div>
                                    <!-- <div class="row">
                                        <label>Destination Country : </label>
                                        <input type="text" class="form-control text-center" id="destination_con" name="destination_con" readonly requiired>
                                    </div> -->
                                    <div class="row">
                                        <label>Enter Arrival Time : </label>
                                        <input type="datetime-local" step="1" class="form-control text-center" id="destination_time" name="destination_time" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <center>
                                    <div class="col-lg-5">
                                        <label>Status : </label>
                                        <select class="form-select text-center" name="status" aria-label="Default select example">
                                            <option selected>Active</option>
                                            <option value="Scheduled">Scheduled</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                </center>
                            </div> -->
                            <br>
                            <center>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Add Train</button>
                            </center>
                        </form>
                    </div>
                </center>
            </div>
        </div>
        <script src="{{url('javascript/trainDetails.js')}}"></script>
        @endsection
