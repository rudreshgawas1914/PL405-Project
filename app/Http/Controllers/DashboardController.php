<?php

namespace App\Http\Controllers;

use App\Models\train_route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('admin')){
                return view('/admin/admin_dashboard')->with('trainArr',train_route::all());

        }elseif(Auth::user()->hasRole('user')) {
                return view('/user/user_dashboard');
        }
    }

    public function searchResult(Request $request){
        return view('/searchresult')->with('trainArr',train_route::all())->with("from",$request->input("from"))->with("to",$request->input("to"));
    }

    public function traindetails(){
        return view('traindetails');
    }
}
