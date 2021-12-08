<?php
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


///////////////Signup//////////////////////////////
Route::post('/data',[AuthController::class, 'signup']);
Route::any('/add',[FrontController::class, 'form']);
///////////////////////////Login////////////////////////
 Route::get('Addinfo/',[FrontController::class,'form'])->name('login');

 Route::post('/log',[AuthController::class, 'login']);

////////////////Page////////////////////////////////////////
 Route::group(['middleware'=> 'auth:web'],function () {

 Route::prefix('/admin')->group(function () {
    Route::get('/Message',[FrontController::class, 'page']);
    Route::get('/logout',[ FrontController::class,'distroy'])->name('logout');

});
});


  
