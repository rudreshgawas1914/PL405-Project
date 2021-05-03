<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use App\Models\seats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
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
    public function create(Request $request)
    {
        $count = $request->input('count');
        for ($i=1; $i <= $count; $i++) {
            $bt = new ticket;
            $bt->train_id=$request->input('train-id');
            $bt->user_id=Auth::user()->id;
            $bt->name=$request->input($i . '' . 'name');
            // $bt->class=$request->input($i . '' . 'catagory');
            $bt->class=$request->input('cat');
            $bt->gender=$request->input($i . '' . 'gender');
            $bt->age=$request->input($i . '' . 'age');
            $bt->address=$request->input($i . '' . 'address');
            $bt->contact_no=$request->input($i . '' . 'contact');
            $bt->email=$request->input($i . '' . 'email');
            $bt->status="booked";
            $bt->save();

            $tr = $request->input('train-id');

            $seats = seats::where('trainroute_id',$tr)->take(1)->get();
            foreach ($seats as $seat) {
                if($request->input('cat')=='1A')//1A
                {
                    $seat->Seat_1A_availableseats=$seat->Seat_1A_availableseats-1;
                }else if($request->input('cat')=='2A')//2A
                {
                    $seat->Seat_2A_availableseats=$seat->Seat_2A_availableseats-1;
                }else if($request->input('cat')=='3A')//3A
                {
                    $seat->Seat_3A_availableseats=$seat->Seat_3A_availableseats-1;
                }else if($request->input('cat')=='FC')//FC
                {
                    $seat->Seat_FC_availableseats=$seat->Seat_FC_availableseats-1;
                }else if($request->input('cat')=='CC')//CC
                {
                    $seat->Seat_CC_availableseats=$seat->Seat_CC_availableseats-1;
                }else if($request->input('cat')=='SL')//SL
                {
                    $seat->Seat_SL_availableseats=$seat->Seat_SL_availableseats-1;
                }else if($request->input('cat')=='2S')//2S
                {
                    $seat->Seat_2S_availableseats=$seat->Seat_2S_availableseats-1;
                }
                $seat->save();
            }
        }

        return redirect('/user_dashboard')->with('userid',Auth::user()->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        //
    }

    public function cancel(Request $req){
        $t = ticket::find($req->input('ticketid'));
        $t->status = 'cancelled';
        $t->save();
        $seats = seats::where('trainroute_id',$t->train_id)->get();
        foreach ($seats as $seat) {
            if($t->class=='1A'){
                $seat->Seat_1A_availableseats += 1;
            }
            $seat->save();
        }
        return redirect('user_dashboard');
    }
}
