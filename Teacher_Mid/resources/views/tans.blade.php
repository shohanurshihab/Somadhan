@extends('layouts.app')
@section('content')
     <h2>Answered Question</h2> 


<h1>Question List</h1>

<table border="0" width="100%" style="color:darkviolet ;">
    <tr>
        <th>Question ID</th>
          
        <th>Student ID</th>
          
        <th>Question</th>
        
        <th>Answer</th>
                
        <th>Question Photo</th>

        <th>Action</th>
      
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
   
    @foreach($questions as $question)
    <tr>
<col style="width:10%">
<col style="width:10%">
<col style="width:25%">
<col style="width:30%">
<col style="width:15%">


        <td align="center">{{$question['q_id']}}</td>
          
        <td align="center">{{$question['s_id']}}</td>
          
        <td align="center">{{$question['qus']}}</td>

        <td align="center">{{$question['ans']}}</td>
                    
        <td align="center">{{$question['qus_photo']}}</td>

        <td align="center"><a href={{"insans/" .$question['q_id'] }}>Edit Answer</a></td>
                             
            
    </tr>
    @endforeach
</table>
</center>
    
   
      
    
    </div>

    </div>

@endsection










    <link rel="stylesheet" href="/css/side.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="/css/flex.css">