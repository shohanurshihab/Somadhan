
<form action="treg" enctype="multipart/form-data" method="POST">
@csrf
    <label for="name">
        Name:
    </label>
    <input type="text" id="name" name="name">
<span style="color:red">@error('name'){{$message}}@enderror</span><br>
<br>

    <label for="email">
        Email:
    </label>
    <input type="text" id="email" name="email">
    <span style="color:red">@error('email'){{$message}}@enderror</span><br>
<br>
    <label for="phn">
        Phone No:
    </label>
    <input type="text" id="phn" name="phn">
    <span style="color:red">@error('phn'){{$message}}@enderror</span><br>
<br>
    <label for="pass">
        Password:
    </label>
    <input type="text" id="pass" name="pass">
    <span style="color:red">@error('pass'){{$message}}@enderror</span><br>
<br>
    <label for="cj">
        Current Job:
    </label>
    <input type="text" id="cj" name="cj">
    <span style="color:red">@error('cj'){{$message}}@enderror</span><br>
<br>
    <label for="cv">
        CV:
    </label>
    <input type="file" id="cv" name="cv">
    <span style="color:red">@error('cv'){{$message}}@enderror</span><br>
<br>

    <label for="photo">
        Photo:
    </label>
    <input type="file" id="photo" name="photo">
    <span style="color:red">@error('photo'){{$message}}@enderror</span><br>
    <br>
    <label for="dob">
        DoB:
    </label>
    <input type="date" id="dob" name="dob">
    <span style="color:red">@error('dob'){{$message}}@enderror</span><br>
<br><br>
    <input type="submit" value="Register">


</form>
