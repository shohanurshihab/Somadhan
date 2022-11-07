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
        if(session()->has('email'))
        {
           $tid=session()->get('id');
           $data=  teacher_info::where('t_id',$tid)->get();
           return view('tprofile',['teacher_info'=>$data]);       
        }
            //$req->session()->put('name',$session[0]->t_id);  
            //echo $session[0];       
    }
    function showname()
    {
        if(session()->has('email'))
        {
           $tid=session()->get('id');
           $data=  teacher_info::where('t_id',$tid)->get();
           return view('inc.side',['teacher_info'=>$data]);       
        }
            //$req->session()->put('name',$session[0]->t_id);  
            //echo $session[0];       
    }
    
    function updatedata(Request $req)
    {
        $tid=session()->get('id');
        $tup=  teacher_info::where('t_id',$tid)->first();
                $tup->name=$req->name;
                $tup->t_email=$req->email;
                $tup->phoneno=$req->phn;
                $tup->password=$req->pass;
                $tup->current_job=$req->cj;
                $tup->cv=$req->cv;
                $img = $req->file('photo');
                $name = $img->getClientOriginalName();
                $fileName = 'public/assets/images/'. $name;
                $img->move('public/assets/images/', $fileName);
                $tup->photo = $fileName;

                //$tup->photo=$req->photo;

                $tup->dob=$req->dob;
                $tup->save();
                return redirect("tprofile");

    }

      
    


}
