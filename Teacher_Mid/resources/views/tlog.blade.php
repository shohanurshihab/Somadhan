<form action="chk" method="POST">
    @csrf
<br>
<label for="email">
        Email:
    </label>
    <input type="text" id="email" name="email">
    <span style="color:red">@error('email'){{$message}}@enderror</span><br>
<br>

<label for="pass">
        Password:
    </label>
    <input type="text" id="pass" name="pass">
    <span style="color:red">@error('pass'){{$message}}@enderror</span><br>

<br><br>
    <input type="submit" value="Login"></form>