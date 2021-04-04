<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('admin')){
                return view('/admin/admin_dashboard');

        }elseif(Auth::user()->hasRole('user')) {
                 return view('/user/user_dashboard');
        }
    }

    
    public function traindetails(){
        return view('traindetails');
    }
}
