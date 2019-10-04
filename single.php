<?php
include 'head.php';
include 'admin/connect.php';

if(isset($_GET['post']))
$id=mysqli_real_escape_string($con,$_GET['post']);
$query="select * from posts where id='$id'";
$rs=mysqli_query($con,$query);
?>

<div class="container-fluid">
    <div class="container">

      <div class="blog-header">
        <h1 class="blog- text-success">Geeks Byte </h1>
        <p class="lead blog- text-danger">Learn About Code On Geeks Byte Blog</p>
      </div>


      <div class="row">

        <div class="blog-main">
          <div class="blog-post">
             <?php  if(mysqli_num_rows($rs)>0){ 
               while ($row=mysqli_fetch_array($rs)){ 
 
                ?>
            <h2 class="blog-post-"><?php echo $row['title']; ?></a> </h2>
            <p class="blog-post-meta">On <?php echo $row['date']; ?> Posted By <?php echo $row['author']; ?></p>
            <p> <?php echo $row['content']; ?> </p>
           

            <?php }} ?>
            </hr>
          </div>
        </div>
      </div>
  


<?php
include 'footer.php';
?>
