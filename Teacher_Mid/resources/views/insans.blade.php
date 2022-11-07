@extends('layouts.app')
@section('content')
     <h2>Answering</h2> 
@foreach($answer as $answer)
     <form action="/insans" method="post" enctype="multipart/form-data">
      @csrf

      <br><br>
    Question ID:   
  <label>{{$answer['q_id']}}</label>  
   <br>
    <br>
   
    Student ID:   
  <label>{{$answer['s_id']}}</label>  
   <br>
    <br>
   
    Question:   
  <label>{{$answer['qus']}}</label>  
   <br>
    <br>
   
    Question Photo:   
  <label>{{$answer['qus_photo']}}</label>  
   <br>
    <br>
   
    Answer:   
<input type="hidden" name="an3" id="an3" value="{{$answer['q_id']}}"> 

<input type="text" name="an1" id="" value="{{$answer['ans']}}">  
   <br>
    <br>
    Answer Photo:   
<input type="file" name="an2" id="" value="{{$answer['ans_photo']}}">  
   <br>
    <br>
     <input type="submit" value="Submit Answer">  
   

@endforeach


@endsection