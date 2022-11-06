<?php

namespace App\Http\Controllers;
use App\Models\question;

use Illuminate\Http\Request;

class insainscontroller extends Controller
{
    //

    function ans(Request $req)
    {
        $tid=session()->get('id'); 
        $qid=$req->an3; 
        //$qid="5";   
           $ques = question::where([['t_id',$tid],['status','Not yet answered'],['q_id',$qid]])->get();
           //$answeredQus= $qus1->count();
           return view('insans')->with('answer',$ques);
    }
    function ansupdate(Request $req)
    {
        //$tid=session()->get('id');     
          // $ques = question::where([['t_id',$tid],['status','Not yet answered']])->get();
           //$answeredQus= $qus1->count();
          // return view('insans')->with('answers',$ques);

           $qid=$req->an3;
        $qup=  question::where('q_id',$qid)->first();
                $qup->ans=$req->an1;
                $qup->ans_photo=$req->an2;
                $qup->status='Answered';
                $qup->save();
                return redirect("tdash");

    }
}
