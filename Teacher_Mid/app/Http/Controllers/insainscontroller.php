<?php

namespace App\Http\Controllers;
use App\Models\question;

use Illuminate\Http\Request;

class insainscontroller extends Controller
{
    //

    function ans($q_id)
    {
        $tid=session()->get('id');
        //$qid="5";   
           $ques = question::where([['t_id',$tid],['status','Not yet answered'],['q_id',$q_id]])->get();
           //$answeredQus= $qus1->count();
           return view('insans')->with('answer',$ques);
    }

    function ansupdate(Request $req)
    {
        $q_id=$req->an3;
                $qup=  question::where('q_id',$q_id)->first();
                $qup->ans=$req->an1;
                $qup->ans_photo=$req->an2;
                $qup->status='Answered';
                $qup->save();
                return redirect("tques");

    }
}
