<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Manage Category</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kanit:500" rel="stylesheet">
 <style>

    p,h1,h2,h3,h4,h5,ul,li,a{
      font-family: 'Kanit', sans-serif;
    }

  </style>
</head>
<body>

 <div class="container-fluid bg-success">

<div class="container bg-success">

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img style="width:220px;height:35px;" src="images/geeksbyteadmin.png"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
      <li><a href="add_post.php"><span class="glyphicon glyphicon-plus"></span> Add Post</a></li>
      <li></li>
    </ul>
    <a class="btn btn-warning navbar-btn pull-left" href=../index.php><span class="glyphicon glyphicon-eye-open"></span> View Blog</a>
    <a class="btn btn-info navbar-btn pull-right" href=logout.php><span class="glyphicon glyphicon-off"></span> LogOut</a>
  </div>
</nav> 


   <h1 class="text-info">  <div class="text-center"><strong>Manage Category </strong></div></h1>


<?php
 include 'connect.php';

  $query="select * from categories";
  $rs=mysqli_query($con,$query);
?>
<div class="row">
  <div class="col-sm-6">

<form method="post">

<label>Category</label>
<input type="text" class="form-control" name="cate" required></input>
<br>
<input class="btn btn-info" type="submit" class="form-control" name="cat" value="ADD CATEGORY"><br><br>
<a class='btn  btn-primary' href=index.php>GO BACK</a>


<h3 class="text-primary text-left"><strong>Categories With ID</strong></h3>
<ol class="list-unstyled">
 <?php  if(mysqli_num_rows($rs)>0){ 
                while ($row=mysqli_fetch_array($rs)){ 
                ?>
<li class="label label-info"><?php echo $row['text'];?> (ID <?php echo $row['id'];?>)</li>
 <?php }} ?>
</ol>

</form>

 <?php
if (isset($_POST["cat"])) {
  $categories=$_POST["cate"];
  include 'connect.php';
  $sql="insert into categories(text) values('".$categories."')";
  $n=mysqli_query($con,$sql);
  if($n==1)
  {
    echo "<script>alert('Sucessfully Categories Added')</script>";
    echo "<script>location.href='add_cat.php'</script>";
    
  }
}
?>
</div>


<div class="col-sm-3">
 <form method="post">
  <div class="form-group">


      <label for="sel1"> <strong>Select Category To Delect</strong></label>
    
      <select class="form-control" id="sel1n" name="dname" value="<?=$row['id']?>">
          <?php
          include("connect.php");
          $sql="select * from categories";
          $drs=mysqli_query($con,$sql);
          while($row=mysqli_fetch_array($drs))
          {
            ?>
        <option><?=$row['id']?>  <?=$row['text']?></option>
         <?php
          }       
        ?>
      </select>
      <br>
    </div>
   <!--

    <div class="checkbox form-group">
      <label class="checkbox-inline"><br>
        <?php
          include("connect.php");
          $sql="select * from categories";
          $drs=mysqli_query($con,$sql);
          while($row=mysqli_fetch_array($drs))
          {
            ?>
        <input class="" type="checkbox" name="dname" value="<?=$row['id']?>">
     ID  <?=$row['id']?> <?=$row['text']?>
      </label><br>
      <?php
          }       
        ?>
    </div>-->

   <button type="submit" name="dbtn" class="btn btn-danger">DELECT</button> 
  </form>

  <?php
  if(isset($_POST["dbtn"]))
  {
    $id=$_POST["dname"];
    $query="delete from categories where id='". $id. "'";
    $n=mysqli_query($con,$query);
    if($n==1)
    {
      echo "<script>alert('Category Deleted')</script>";
echo "<script>location.href='add_cat.php'</script>";
    }
  }
?>
</div>


<!--col 3-start-->
<div class="col-sm-3">





</div>
<!--col 3-end -->


</div>

</div>
</div>
</body>
</html>
