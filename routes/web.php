<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationController;

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
    return view('Login');
});

Route::get('/signin', function () {
    return view('Signin');
});

Route::prefix('user')->group(function(){

    Route::post('/signin' , [UserController::class , 'store']);
    Route::post('/login' , [UserController::class , 'index']);
    Route::get('/logout', [UserController::class, 'logout']);

    Route::get('/home',[JobController::class,'show2']);
    Route::get('/viewdetail/{id}',[JobController::class,'getById']);

    Route::post('/jobapply/{id}',[ApplicationController::class,'store']);
    Route::get('/myapply',[ApplicationController::class, 'show']);
    Route::post('/getJobsByCity', [JobController::class , 'getJobsByCityUser']);
});

Route::prefix('admin')->group(function(){
    Route::view('/home', 'Admin/Home');

    Route::post('/addcity' , [CityController::class , 'store']);
    Route::get('/viewcity' , [CityController::class , 'show']);
    Route::get('/viewcity2' , [CityController::class , 'show2']);
    Route::get('/addcity/{id}' , [CityController::class , 'edit']);
    Route::get('/delcity/{id}' , [CityController::class , 'destroy']);
    Route::post('/updatecity/{id}' , [CityController::class , 'Update']);

    Route::post('/addjob', [JobController::class,'store'])->name('addjob');
    Route::get('/viewjobs', [JobController::class , 'show'])->name('viewjobs');
    Route::post('/getJobsByCity', [JobController::class , 'getJobsByCity']);
    Route::get('/editjob/{id}', [JobController::class,'edit'])->name('editjob');
    Route::post('/updatejob/{id}', [JobController::class,'update'])->name('updatejob');
    Route::get('/deljob/{id}' , [JobController::class , 'destroy']);


//    Route::post('' , [UserController::class , 'index']);
});
