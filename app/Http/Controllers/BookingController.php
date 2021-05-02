<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
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
            $bt = new booking;
            $bt->train_id=$request->input('train-id');
            $bt->user_id=Auth::user()->id;
            $bt->name=$request->input($i . '' . 'catagory');
            $bt->class=$request->input($i . '' . 'catagory');
            $bt->gender=$request->input($i . '' . 'gender');
            $bt->age=$request->input($i . '' . 'age');
            $bt->address=$request->input($i . '' . 'address');
            $bt->contact_no=$request->input($i . '' . 'contact');
            $bt->email=$request->input($i . '' . 'email');
            $bt->status="booked";
            $bt->save();
        }
        return redirect('/user_dashboard')->with('userid',Auth::user()->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$routeid)
    {
		return redirect('user_dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
	 
	public function add_ticket(Request $request){
		return redirect('user_dashboard');
	}
	 
    public function show(booking $booking)
    {
        return $routeid;
        $count = $request->input('count');
        $bt = new book_ticket;
        $bt->train_id=$request->input('train-id');
        $bt->user_id=Auth::user()->id;
        $bt->save();
		//for($i=1;$i< $count;$i++){
        //		$bt = new book_ticket;
		//		$bt->train_id=$routeid;
        //		$bt->user_id=$userid;
        //		$bt->name=$request->input($i+'name');
        //		$bt->save();
		//}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }

    public function ticket(){
        
    }
}
