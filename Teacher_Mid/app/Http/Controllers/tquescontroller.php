<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\question;
use App\Models\appointment;
use App\Models\teacher_info;

class tquescontroller extends Controller
{
    //

    function ansques()
    {
    //$data =  question::all();   
    $data1 = question:: where('status','Answered')->get();    
    return view('tans')->with('questions',$data1);
    }
    function unansques()
    {
    //$data =  question::all();
    $data2 = question:: where('status','not yet answered')->get();    
    return view('tques')->with('questions',$data2);

    }

    function quescount()
    {
       // $count =  question::all()->count();
       // 'nos'=>$count
       //echo $count;

        $qus1 = question:: where('status','Answered')->get();
        $answeredQus= $qus1->count();

        $qus2 = question:: where('status','not yet answered')->get();
        $notansweredQus= $qus2->count();
        
        $app = appointment::all()->count();
        return view('tdash')->with('countans',$answeredQus)->with('countnotans',$notansweredQus)->with('countapp',$app);


     
    
        
    }

}
