<?php

namespace App\Http\Controllers;

use App\Models\train_route;
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
        //
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
    public function destroy(train_route $train_route)
    {
        //
    }
}
