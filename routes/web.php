<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrainRouteController;

// Route::get('/', function () {return view('welcome');});
Route::get('/',[DashboardController::class,'index']);

//for both
Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
});

//for admin
Route::group(['middleware'=>['auth', 'role:admin']],function(){
    Route::get('admindashboard',[DashboardController::class,'index']);
    Route::get('train-delete/{id}',[TrainRouteController::class,'destroy']);
    Route::get('train-create',[TrainRouteController::class,'create'])->name('train-create');
    Route::post('train-submit',[TrainRouteController::class,'store']);
    Route::get('train-statuschange/{id}',[TrainRouteController::class,'changestatus']);
    Route::get('train-statusArrival/{id}',[TrainRouteController::class,'changeArrivalTime']);
    Route::get('train-statusDeparture/{id}',[TrainRouteController::class,'changeDepartureTime']);
    Route::get('train-updateform/{id}',[TrainRouteController::class,'updateform']);
});

Route::group(['middleware'=>['auth', 'role:user']],function(){
    Route::get('/profile',[DashboardController::class,'dashboard']);
});

Route::get('searchresult',[DashboardController::class,'searchResult'])->name('searchresult');

require __DIR__.'/auth.php';
