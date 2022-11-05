@extends('layouts.app')
@section('content')
     <h2>Dashboard</h2> 
    <div class="container">   
  
  
    <br>
     <a href="{{url('tques')}}" class="box">
     20 <br><br>
     Question Pending</a> 
     
      <a href="#" class="box">
      6 <br><br>
      Appointments</a> 
      
      <a href="#" class="box">
      18 <br><br> 
      Question Answered</a> 
      
    
    </div>

    </div>

  </body>
  <link rel="stylesheet" href="/css/side.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="/css/flex.css">
</html>
@endsection