<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrainRouteController;
use App\Http\Controllers\BookingController;

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
    Route::get('train-statusArrivalLoc/{id}',[TrainRouteController::class,'changeArrivalLoc']);
    Route::get('train-statusDeparture/{id}',[TrainRouteController::class,'changeDepartureTime']);
    Route::get('train-statusDepartureLoc/{id}',[TrainRouteController::class,'changeDepartureLoc']);
    Route::get('train-updateform',[TrainRouteController::class,'updateform']);
});

Route::group(['middleware'=>['auth', 'role:user']],function(){
    Route::get('/user_dashboard',[DashboardController::class,'dashboard']);
	Route::get('/bookticket',[DashboardController::class,'bookticket'])->name('bookticket');
	Route::get('ticketadd/{id}',[BookingController::class,'store'])->name('ticketadd');
	Route::post('ticket', [TicketController::class,'create']);
    Route::post('ticketcancel', [TicketController::class,'cancel']);
});

Route::get('searchresult',[DashboardController::class,'searchResult'])->name('searchresult');


require __DIR__.'/auth.php';





