@extends('layouts.layout')

<!-- https://github.com/datameet/railways api -->

@section('content')
<div class="container-fluid" style="background-color: white;padding: 10px">
    <h2 style="text-align: center;">{{$train->Train_Name}} Passengers List</h2>
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Sr No.</th>
              <th scope="col">Name</th>
              <th scope="col">Seat No.</th>
              <th scope="col">Gender</th>
              <th scope="col">DOB</th>
              <th scope="col">Catagory</th>
            </tr>
        </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>
<script src="{{url('javascript/trainDetails.js')}}"></script>
@endsection
