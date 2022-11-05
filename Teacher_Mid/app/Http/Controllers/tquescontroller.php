<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\question;

class tquescontroller extends Controller
{
    //

    function allques()
    {
    $data =  question::all();
    return view('tques',['questions'=>$data]);
    }

}
