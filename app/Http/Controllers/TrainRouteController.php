<?php

namespace App\Http\Controllers;

use App\Models\train_route;
use App\Models\seats;
use Illuminate\Http\Request;

class TrainRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/admin_createTrain');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tr = new train_route;
        $tr->Train_No=$request->input('train_no');
        $tr->Train_Name=$request->input('train_name');
        $tr->Source_Location=$request->input('source_loc');
        $tr->Departure_Time=$request->input('source_time');
        $tr->Destination=$request->input('destination_loc');
        $tr->Arrival_Time=$request->input('destination_time');
        $tr->Status='Scheduled';
        $tr->save();

        $st=new seats;
        $st->trainroute_id=$tr->id;
        if ($request->input('1a')) {
            $st->Seat_1A=true;
            $st->Seat_1A_availableseats=$request->input('1a-seats');
            $st->Seat_1A_totalseats=$request->input('1a-seats');
            $st->Seat_1A_seatprice=$request->input('1a-prize');
        }else{
            $st->Seat_1A=false;
        }

        if ($request->input('2a')) {
            $st->Seat_2A=true;
            $st->Seat_2A_availableseats=$request->input('2a-seats');
            $st->Seat_2A_totalseats=$request->input('2a-seats');
            $st->Seat_2A_seatprice=$request->input('2a-prize');
        }else{
            $st->Seat_2A=false;
        }

        if ($request->input('3a')) {
            $st->Seat_3A=true;
            $st->Seat_3A_availableseats=$request->input('3a-seats');
            $st->Seat_3A_totalseats=$request->input('3a-seats');
            $st->Seat_3A_seatprice=$request->input('3a-prize');
        }else{
            $st->Seat_3A=false;
        }

        if ($request->input('fc')) {
            $st->Seat_FC=true;
            $st->Seat_FC_availableseats=$request->input('fc-seats');
            $st->Seat_FC_totalseats=$request->input('fc-seats');
            $st->Seat_FC_seatprice=$request->input('fc-prize');
        }else{
            $st->Seat_FC=false;
        }

        if ($request->input('cc')) {
            $st->Seat_CC=true;
            $st->Seat_CC_availableseats=$request->input('cc-seats');
            $st->Seat_CC_totalseats=$request->input('cc-seats');
            $st->Seat_CC_seatprice=$request->input('cc-prize');
        }else{
            $st->Seat_CC=false;
        }

        if ($request->input('sl')) {
            $st->Seat_SL=true;
            $st->Seat_SL_availableseats=$request->input('sl-seats');
            $st->Seat_SL_totalseats=$request->input('sl-seats');
            $st->Seat_SL_seatprice=$request->input('sl-prize');
        }else{
            $st->Seat_SL=false;
        }

        if ($request->input('2s')) {
            $st->Seat_2S=true;
            $st->Seat_2S_availableseats=$request->input('2s-seats');
            $st->Seat_2S_totalseats=$request->input('2s-seats');
            $st->Seat_2S_seatprice=$request->input('2s-prize');
        }else{
            $st->Seat_2S=false;
        }

        $st->save();

        return redirect('admindashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\train_route  $train_route
     * @return \Illuminate\Http\Response
     */
    public function show(train_route $train_route)
    {
        return view('/admin/admin_dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\train_route  $train_route
     * @return \Illuminate\Http\Response
     */
    public function edit(train_route $train_route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\train_route  $train_route
     * @return \Illuminate\Http\Response
     */

    public function updateform(train_route $train_route,$id){
        $tr = train_route::find($id);
        return view("/admin/admin_editTrain")->with('train',$tr);
    }

    public function update(Request $request, train_route $train_route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\train_route  $train_route
     * @return \Illuminate\Http\Response
     */
    public function destroy(train_route $train_route,$id)
    {
        seats::where('trainroute_id',$id)->delete();
        train_route::where('id',$id)->delete();

        return redirect('admindashboard');
    }

    public function changestatus(train_route $train_route,$id,Request $request){
        $tr = train_route::find($id);
        if($tr->Status==$request->input('status')){
            return redirect('admindashboard');
        }else{
        $tr->Status=$request->input('status');
        $tr->save();
        return redirect('admindashboard');
        }
    }

    public function changeArrivalTime(train_route $train_route,Request $request,$id){
        $tr = train_route::find($id);
        if($tr->Departure_Time==$request->input('newtime')){
            return redirect('admindashboard');
        }else{
        $tr->Departure_Time=$request->input('newtime');
        $tr->save();
            return redirect('admindashboard');
        }
    }

    public function changeDepartureTime(train_route $train_route,Request $request,$id){
        $tr = train_route::find($id);
        if($tr->Arrival_Time==$request->input('newtime')){
            return redirect('admindashboard');
        }else{
        $tr->Arrival_Time=$request->input('newtime');
        $tr->save();
            return redirect('admindashboard');
        }
    }
}
