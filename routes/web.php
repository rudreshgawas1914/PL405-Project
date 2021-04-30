<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrainRouteController;

Route::get('/', function () {return view('welcome');});

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
});

Route::group(['middleware'=>['auth', 'role:user']],function(){
    Route::get('/', function () {return view('welcome');});
});

Route::get('searchresult',[DashboardController::class,'searchResult'])->name('searchresult');
Route::get('bookticket/{id}',[DashboardController::class,'bookticket'])->name('bookticket');
Route::get('store_ticket/{id}/{userid}',[BookingController::class,'store_ticket'])->name('store_ticket');

require __DIR__.'/auth.php';
