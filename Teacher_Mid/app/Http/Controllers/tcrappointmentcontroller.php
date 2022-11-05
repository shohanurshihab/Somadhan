<?php

namespace App\Http\Controllers;
use App\Models\appointment;

use Illuminate\Http\Request;

class tcrappointmentcontroller extends Controller
{
     function appointment()
    {
        $data =  appointment::all();   
        //$data1 = appointment:: where('status','Answered')->get();    
        return view('tcappnt')->with('apnt',$data);
        }

}
