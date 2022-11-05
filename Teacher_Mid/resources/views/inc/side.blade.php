<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Somadhan</title>

    
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>

      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Soma<span>dhan</span></h3>
       
      </div>
     
    
    </header>
 
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="" class="profile_image" alt="">
        <h4>Teacher</h4>
      </center>
      
      <a href="{{url('tdash')}}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="{{url('tprofile')}}"><i class="fas fa-cogs"></i><span>Profile</span></a>
      <a href="#"><i class="fas fa-bell"></i><span>Notification</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
    </div>

    <!--sidebar end-->

 
  
    <div class="content">