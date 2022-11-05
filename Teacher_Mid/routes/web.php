<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherRegcontroller;
use App\Http\Controllers\tlogcontroller;
use App\Http\Controllers\tquescontroller;
use App\Http\Controllers\tprofcontroller;


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
Route::view("Register","treg");
Route::post("treg",[teacherRegcontroller::class,'inputData']);
Route::post("chk",[tlogcontroller::class,'checkLogin']);
Route::view("tlog","tlog");
Route::view("tdash","tdash");
Route::view("tques","tques");
Route::view("tprofile","tprofile");
Route::get("tques",[tquescontroller::class,'allques']);
Route::get("tprofile/",[tprofcontroller::class,'showdata']);