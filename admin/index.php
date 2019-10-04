<?php
session_start();
if (isset($_SESSION["username"])) {
$user=$_SESSION["username"];
echo "<h2>  <div class='alert alert-success text-center'>
<strong>Welcome!</strong> You have login as  <strong class='text-danger'>$user </strong>
</div></h2>";
}
else {
  header("location:login.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Geeks Byte</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/custom.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kanit:500" rel="stylesheet">
 <style>

    p,h1,h2,h3,h4,h5,ul,li,a{
      font-family: 'Kanit', sans-serif;
    }

  </style>
</head>
<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img style="width:220px;height:35px;" src="images/geeksbyteadmin.png"></a>

    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
      <li><a href="add_post.php"><span class="glyphicon glyphicon-plus"></span>Add Post</a></li>
      <li><a href="add_cat.php"><span class="glyphicon glyphicon-plus"></span> Manage Category</a></li>
      <li></li>
    </ul>
    <a class="btn btn-warning navbar-btn pull-left" href=../index.php><span class="glyphicon glyphicon-eye-open"></span> View Blog</a>
    <a class="btn btn-info navbar-btn pull-right" href=logout.php><span class="glyphicon glyphicon-off"></span> LogOut</a>
  </div>
</nav> 


<div class="container-fluid">
  <div class="container">



<?php
  include 'connect.php';
  $query="select * from posts ORDER BY id DESC";
  $rs=mysqli_query($con,$query);
?>

 <div class="row">

<div class="col-sm-12">

<div class="panel panel-primary">
      <div class="panel-heading"><strong>Manage Post</strong> (Click On Post Titles To Update Post)</div>
      <div class="panel-body">
        

        <div class="table-responsive">
       <table class="table">
    <thead>
      <tr>
        <th>Post ID</th>
        <th>Post Title</th>
         <th>Author</th>
         <th>Delect</th>
      </tr>
    </thead>
    <tbody> 
    <?php 
     if(mysqli_num_rows($rs)>0){ 
                while ($row=mysqli_fetch_array($rs)){ 

                ?>    
      <tr class="success">
        <td><?php echo $row['id']; ?></td>
        <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
        <td><?php echo $row['author']; ?></td>
        <form method="post">
        <td >   <input class="" type="checkbox" name="pdel" value="<?=$row['id']?>">
          <button class="btn btn-danger" type="submit" name="pdelbtn"><span class="glyphicon glyphicon-remove"></span></button></td>
        <?php
  if(isset($_POST["pdelbtn"]))
  {
    $id=$_POST["pdel"];
    $query="delete from posts where id='". $id. "'";
    $n=mysqli_query($con,$query);
    if($n==1)
    {
      echo "<div class='alert alert-danger alert-dismissible'>
      <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  Post  Deleted Succesfully</div>";
echo "<script>location.href='index.php'</script>";
    }
  }
?>
      </form>
      </tr>
       <?php }} ?>
    </tbody>
  </table>
</div>

 </div>
</div>
</div>

 
  </div>
</div>
</body>
</html>
