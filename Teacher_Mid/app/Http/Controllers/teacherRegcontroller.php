<?php

namespace App\Http\Controllers;

use App\Models\teacher_info;
use Illuminate\Http\Request;

class teacherRegcontroller extends Controller
{
    function inputData(Request $req)
    {
        $req->validate([
            "name"=>"required",
            "email"=>"required",
            "phn"=>"required",
            "pass"=>"required",
            "cj"=>"required",
            "cv"=>"required",
            "photo"=>"required",
            "dob"=>"required",
            ]);
            
            if($req==true)
            {
                $member = new teacher_info();
                $member->name=$req->name;
                $member->t_email=$req->email;
                $member->phoneno=$req->phn;
                $member->password=$req->pass;
                $member->current_job=$req->cj;
                $member->cv=$req->cv;
                $member->photo=$req->photo;
                $member->dob=$req->dob;
                $member->save();
                return view("tlog");
            }
        }

    function addData(Request $req)
    {
       

    }
}
