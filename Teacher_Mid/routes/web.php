<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherRegcontroller;
use App\Http\Controllers\tlogcontroller;
use App\Http\Controllers\tquescontroller;
use App\Http\Controllers\tprofcontroller;
use App\Http\Controllers\tcrappointmentcontroller;
use App\Http\Controllers\insainscontroller;


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
Route::post("tdash",[tlogcontroller::class,'checkLogin']);
Route::get("logout",[tlogcontroller::class,'logout'])->name('logout');
Route::view("tlog","tlog");
Route::view("tdash","tdash");
Route::view("tques","tques");
Route::view("tprofile","tprofile");
Route::view("apnt","tcappnt");
Route::view("insans","insans");
Route::get("tques",[tquescontroller::class,'unansques']);
Route::get("tans",[tquescontroller::class,'ansques']);
Route::get("tprofile",[tprofcontroller::class,'showdata']);
Route::post("tprofile",[tprofcontroller::class,'updatedata']);
Route::get("tdash",[tquescontroller::class,'quescount']);
Route::get("apnt",[tcrappointmentcontroller::class,'appointment']);

Route::get("insans",[insainscontroller::class,'ans']);
Route::post("ans1",[insainscontroller::class,'ansupdate']);
