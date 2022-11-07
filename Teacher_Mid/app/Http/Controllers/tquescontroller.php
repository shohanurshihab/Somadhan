<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;
use App\Models\question;
use App\Models\appointment;
use App\Models\teacher_info;

class tquescontroller extends Controller
{
    //

    function ansques()
    {
        if(session()->has('email'))
        {
           $tid=session()->get('id');
    //$data =  question::all();   
    $data1 = question:: where([['t_id',$tid],['status','Answered']])->get();    
    return view('tans')->with('questions',$data1);}
    }
    function unansques()
    {
        if(session()->has('email'))
        {
           $tid=session()->get('id');
    //$data =  question::all();
    $data2 = question:: where([['t_id',$tid],['status','Not yet answered']])->get();    
    return view('tques')->with('questions',$data2);}

    }

    function quescount()
    {  
        if(session()->has('email'))
        {
           $tid=session()->get('id');     
           $qus1 = question:: where([['t_id',$tid],['status','Answered']])->get();
           $answeredQus= $qus1->count();
   
           $qus2 = question:: where([['t_id',$tid],['status','Not yet answered']])->get();
           $notansweredQus= $qus2->count();
           
           $app = appointment::where('t_id',$tid)->count();

           //$tid=session()->get('id');
           $data=  teacher_info::where('t_id',$tid)->get();
           //return view('tdash',['teacher_info'=>$data]); 

           return view('tdash')->with('countans',$answeredQus)->with('countnotans',$notansweredQus)->with('countapp',$app)->with('teacher_info',$data);

        }
           
    }

}
