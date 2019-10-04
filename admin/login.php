<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Signin | Geeks Bye</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:500" rel="stylesheet">
 <style>

    p,h1,h2,h3,h4,h5,ul,li,a{
      font-family: 'Kanit', sans-serif;
    }

  </style>

  </head>

  <body>
    <div class="container">
     
      <form method="post" class="form-signin bg-success" action="#">
      
        <h1 align="center" class="form-signin-heading"><strong><span class="glyphicon glyphicon-user"></span>Geeks Byte Admin</strong></h1>
       <h3 align="center" class="form-signin-heading"><strong>Log In </strong></h3>
        <label for="inputEmail" class="sr-only">Username</label><br>
        <input type="text" class="form-control" name="uname" placeholder="Username" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text"  name="passwd" class="form-control" placeholder="Password" >
        <button class="btn btn-lg btn-primary btn-block" name="btn" type="submit">Sign in</button>
        
<?php

    if (isset($_POST["btn"])) {
      $user=$_POST["uname"];
      $pass=$_POST["passwd"];

    include 'connect.php';
    $sql="select * from admin where username='".$user."' and pass='".$pass."'";
    $rs=mysqli_query($con,$sql);
    if(mysqli_num_rows($rs)==1)
    {
      session_start();
      $_SESSION["username"]=$user;
      $_SESSION["pass"]=$pass;
      header("location:index.php");
    }
    else {
      echo "<div class='alert alert-danger alert-dismissible'>
      <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Warning!</strong> Invalid Username | Password
</div>";
    }
  }
     ?>

      </form>

    </div>

<link rel="javascript" href="pro/js/bootstrap.js">

  </body>
</html>
