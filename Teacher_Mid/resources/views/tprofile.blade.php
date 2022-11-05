@extends('layouts.app')
@section('content')
<h2>Profile</h2>

<center>

@foreach($teacher_info as $teacher_info)



        <img src="#" class="profile_image" alt="DP">
        <h4>Profile Picture</h4>
        <br>
        <form action="tprofile" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$teacher_info['t_id']}}">
        Name:
        <input type="Text" name="name" value="{{$teacher_info['name']}}">
        <br>
        Email:
        <input type="Email" name="email" value="{{$teacher_info['t_email']}}">
        <br>
        Phone Number:
        <input type="Text" name="phn" value="{{$teacher_info['phoneNo']}}">
        <br>
        Password:
        <input type="Text" name="pass" value="{{$teacher_info['password']}}">
        <br>
        Current Job:
        <input type="Text" name="cj" value="{{$teacher_info['current_job']}}">
        <br>
        CV:
        <input type="Text" name="cv" value="{{$teacher_info['cv']}}">
        <br>
        Date Of Birth:
        <input type="date" name="dob" value="{{$teacher_info['dob']}}">
        <br>

        <input type="submit" value="Update">
</form>
    @endforeach 


  </center>


@endsection