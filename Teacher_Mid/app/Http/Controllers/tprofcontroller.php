<?php

namespace App\Http\Controllers;
use session;
use App\Models\teacher_info;
use App\Http\Controllers\tlogcontroller;

use Illuminate\Http\Request;

class tprofcontroller extends Controller
{
    function showdata()
    {
        if(session())
        {
            //echo session()->has('t_id');

            $tid="51";
            $data=  teacher_info::where('t_id',$tid)->get();
           return view('tprofile',['teacher_info'=>$data]);
        
            }
            //$req->session()->put('name',$session[0]->t_id);  
            //echo $session[0];
       
        
    }
}
