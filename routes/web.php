<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrainRouteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//for both
Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});

//for admin
Route::group(['middleware'=>['auth', 'role:admin']],function(){
    Route::get('admindashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('train-delete/{id}',[TrainRouteController::class,'destroy']);
    Route::get('train-create',[TrainRouteController::class,'create'])->name('train-create');
    Route::post('train-submit',[TrainRouteController::class,'store']);
    // Route::get('add_train',[TrainRouteController::class,'show']);
});


require __DIR__.'/auth.php';
