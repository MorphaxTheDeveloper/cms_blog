<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/custom.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Kanit:500" rel="stylesheet">
</head>
<style>

    p,h1,h2,ul,li{
      font-family: 'Kanit', sans-serif;
    }

  </style>
<body>



<div class="container">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img style="width:160px;height:35px;" src="images/geeksbyte.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin/login.php"><span class="glyphicon glyphicon-user"></span> ADMIN</a></li>
       <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> SIGNUP</a></li>-->
      </ul>
    </div>
  </div>
</nav>

  <div style="text-align:center">
    <h2>Contact Us</h2>
  </div>

<form  class="card  text-white form-group" action="c_action_page.php" method="post">
  <input  class="form-control" type="text" name="name" placeholder="Full Name"><br>

  <input class="form-control" type="mail" name="mail" placeholder="Your Mail"><br>

  <input  class="form-control" type="text" name="subject" placeholder="Subject"><br>

  <textarea  class="form-control" name="message" rows="8" cols="30" placeholder="Write Your Message Here"></textarea>  <br>
  <button type="submit" class="btn btn-sm btn-primary" name="submit">SEND MESSAGE</button>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.js"></script>
  </div>
</body>
</html>

