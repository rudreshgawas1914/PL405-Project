<?php

namespace App\Http\Controllers;
use App\Models\train_route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index(){
        if(\Auth::check()){
            // return "checked";
            if(Auth::guest())
            {
                // return "guest";
                return view('welcome');
            }else{
                // return "not guest";
                if(Auth::user()->hasRole('admin')){
                    return view('/admin/admin_dashboard')->with('trainArr',train_route::all());
                }elseif(Auth::user()->hasRole('user')) {
                        return view('welcome');
                }
            } 
        }
        else{
            // return "not checked";
            return view('welcome');
        }
    }

    public function searchResult(Request $request){
        return view('/searchresult')->with('trainArr',train_route::all())->with("from",$request->input("from"))->with("to",$request->input("to"));
    }

    public function dashboard(){
        return view('/user/user_dashboard')->with("userid",Auth::user()->id);
    }

    public function traindetails(){
        return view('traindetails');
    }


    public function bookticket(train_route $train_route,$id){
        $tr = $train_route::find($id);
        return view('user/bookticket')->with('train',$tr)->with("userid",Auth::user()->id);
    }

    public function store_ticket(train_route $train_route,$id){
        $tr = $train_route::find($id);
        return view('user/store_ticket');
    }
}
