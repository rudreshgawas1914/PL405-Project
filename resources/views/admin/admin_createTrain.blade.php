@extends('layouts.adminlayout')

<!-- https://gist.github.com/apsdehal/11393083 api -->

@section('content')
<div class="container-fluid">
    <div class="row m-md-1">
        <center>
            <div class="col-8 hidden-sm hidden-xs">
                <div class="search-panel1">
                    <div class="row">
                        <h2><strong>Add Train</strong></h2>
                    </div>
                    <form style="padding: 1% 5% 5% 5%" action="train-submit" method="post">
                        @csrf
                        <!-- <div class="row bg-warning"> -->
                            <div class="row">
                                <label>Train Name : </label>
                                <input type="text" class="form-control text-center" id="trainname" name="train_name" placeholder="" required="">
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="row">
                                        <label>Enter Source : </label>
                                        <input type="text" class="form-control text-center" id="source_loc" name="source_loc" placeholder="" required="">
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label>Enter Departure Time : </label>
                                        <input type="datetime-local" class="form-control text-center" id="source_time" name="source_time" placeholder="" required="">
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <label>Enter Destination : </label>
                                        <input type="text" class="form-control text-center" id="destination_loc" name="destination_loc" placeholder="" required="">
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label>Enter Arrival Time : </label>
                                        <input type="datetime-local" class="form-control text-center" id="destination_time" name="destination_time" min=source_time placeholder="" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
                            </div>
                            <br>
                            <center>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Add Train</button>
                            </center>
                        </form>
                    </div>
                </center>
            </div>
        </div>
        @endsection
