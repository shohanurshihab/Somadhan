@extends('layouts.app')
@section('content')
<h2>Profile</h2>

<center>

@foreach($teacher_info as $teacher_info)


        <img src="#" class="profile_image" alt="DP">
        <h4>Profile Picture</h4>
        <br>
        Name:
        <input type="Text" name="" value="{{$teacher_info['name']}}">
        <br>
        Email:
        <input type="Email" name="" value="{{$teacher_info['t_email']}}">
        <br>
        Phone Number:
        <input type="Text" name="" value="{{$teacher_info['phoneNo']}}">
        <br>
        Password:
        <input type="Text" name="" value="{{$teacher_info['password']}}">
        <br>
        Current Job:
        <input type="Text" name="" value="{{$teacher_info['current_job']}}">
        <br>
        CV:
        <input type="Text" name="" value="{{$teacher_info['cv']}}">
        <br>
        Date Of Birth:
        <input type="date" name="" value="{{$teacher_info['dob']}}">
    @endforeach 

    <p>{{Session::get('name')}}</p>
    <p>{{Session::get('email')}}</p>
    <p>{{Session::get('phn')}}</p>
    <p>{{Session::get('pass')}}</p>
    <p>{{Session::get('cj')}}</p>
    <p>{{Session::get('cv')}}</p>
    <p>{{Session::get('db')}}</p>
  </center>


@endsection