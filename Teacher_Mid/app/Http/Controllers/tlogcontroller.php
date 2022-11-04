<?php

namespace App\Http\Controllers;


use App\Models\teacher_info;
use Illuminate\Http\Request;

class tlogcontroller extends Controller
{
    //
    function checkLogin(Request $req)
    {

        $req->validate([
          
           "email"=>"required",
        
            "pass"=>"required"]);

    //$member = new teacher_info();

   // $data =  teacher_info::find();

   $eml = teacher_info:: where('t_email', '=', $req->email)->first(); 
   $psk = teacher_info:: where('password', '=', $req->pass)->first(); 
   if ($eml==true && $req==true && $psk==true) {
    return view("tdash");
   }
   else 
   {
    return back() ->with('fail', 'This email is not registered.');
   }

    
 }



}
