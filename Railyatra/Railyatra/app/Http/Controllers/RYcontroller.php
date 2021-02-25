<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RYmodel;

class RYcontroller extends Controller
{
    function loginsubmit(Request $req){
        print_r($req->input());
        return RYmodel::all();
    }
}
