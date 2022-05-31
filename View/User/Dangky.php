<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="CSS/Dangky.css">

</head>
<div class="login">
    <h2 class="active"> sign in </h2>

    <h2 class="nonactive"> sign up </h2>
    <form method="POST">



        <input type="text" class="text" name="username">
        <span>Username</span>

        <br>

        <br>

        <input type="password" class="text" name="password">
        <span>Password</span>
        <br>

        <br>

        <input type="date" class="text" name="date">
        <span>Date</span>
        <br>

        <br>

        <input type="text" class="text" name="diachi">
        <span>Dia chi</span>
        <br>

        <br>

        <input type="text" class="text" name="email">
        <span>Email</span>
        <br>

        <br>

        <select name="gioitinh">
            <option value=0>Nam</option>
            <option value=1>Nu</option>


        </select>



        <select name="quyen">
            <option value="1">Doc gia</option>
            <option value="2">Tac gia</option>
            <option value="3">QTV</option>

        </select>


        <br>

        <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
        <label for="checkbox-1-1">Keep me Signed in</label>

        <button class="signin" name="signin">
            Sign In
        </button>
        <button class="signup" name="signup">
            Sign Up
        </button>


        <hr>

        <a href="#">Forgot Password?</a>
    </form>

</div>


</html>