<?php

namespace App\Http\Controllers;


use App\Models\teacher_info;
use Illuminate\Http\Request;
use session;

class tlogcontroller extends Controller
{
    //
    function checkLogin(Request $req)
    {

        $req->validate([
          
           "email"=>"required",
        
            "pass"=>"required"]);

   $session = teacher_info::where('t_email', '=', $req->email)->where('password', '=', $req->pass)->get();  
   if (count($session)>0 && $req==true) {

    $req->session()->put('name',$session[0]->name);    
    $req->session()->put('email',$session[0]->t_email);
    $req->session()->put('phn',$session[0]->phoneNo);
    $req->session()->put('pass',$session[0]->password);
    $req->session()->put('cj',$session[0]->current_job);
    $req->session()->put('cv',$session[0]->cv);
    $req->session()->put('db',$session[0]->dob);

    //echo $session[0];
    
    return view("tdash");
   }
   else 
   {
    return back()->with('msg', 'This email is not registered.');
   } 

    
 }



}
