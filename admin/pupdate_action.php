<?php
if (isset($_POST["upbtn"])) {
  $title=$_POST["title"];
    $content=$_POST["contents"];
  $tags=$_POST["tags"];
  include 'connect.php';
  $up="update posts set title='".$title."',content='". $content. "',tags='". $tags."' where id='". $id. "'";
  $check=mysqli_query($con,$up);
    if($check==1)
  {
    echo "<script>alert('Updated Post Successfully')</script>";
    echo "<script>location.href='../index.php'</script>";
  }
}

   ?>

