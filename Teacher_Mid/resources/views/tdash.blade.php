@extends('layouts.app')
@section('content')
     <h2>Dashboard</h2> 
    
    
    <div class="container">   
  
 
    <br>
     <a href="{{url('tques')}}" class="box">
     {{$countnotans}} <br><br>
     Question Pending</a> 
     
      <a href="{{url('apnt')}}" class="box">
      {{$countapp}} <br><br>
      Appointments</a> 
      
      <a href="{{url('tans')}}" class="box">
      {{$countans}} <br><br> 
      Question Answered</a> 
      
      
    
    </div>
    <div><img src="" class="profile_image" alt="DP"></div>
    

  </body>
  <link rel="stylesheet" href="/css/side.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="/css/flex.css">
</html>
@endsection