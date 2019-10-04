<?php
  include 'admin/connect.php';
  $query="select * from categories";
  $rs=mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Geeks Byte</title> 
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/custom.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Kanit:500" rel="stylesheet">
   <script src="https://rawgit.com/mattboldt/typed.js/master/lib/typed.js"></script>
<script>
  new Typed('#matt', {
    strings: ["Geeks Byte"],
    typeSpeed: 80,
    onComplete: function() {
      var cursor = document.getElementsByClassName('typed-cursor')[0];
      setTimeout(function() {
        cursor.style.animationIterationCount = 0;
      }, 2000);
    }
  })
</script>
  <style>

    p,h1,h2,h3,h4,h5,ul,li,a{
      font-family: 'Kanit', sans-serif;
    }

  </style>
  </head>
  
  <body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img style="width:180px;height:35px;" src="images/geeksbyte.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORIES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php  if(mysqli_num_rows($rs)>0){ 
                while ($row=mysqli_fetch_array($rs)){ 

                ?>
  
            <li class=""><strong><a href="index.php?category=<?php echo $row['id'];?>"> <?php echo $row['text']; ?></a></strong></li>
  <?php }}?>
          </ul>
        </li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin/login.php"><span class="glyphicon glyphicon-user"></span> ADMIN</a></li>
       <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> SIGNUP</a></li>-->
      </ul>
    </div>
  </div>
</nav>

    
