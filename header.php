<?php
include 'admin/connect.php';
 if(isset($_GET['category']))
{
$category=mysqli_real_escape_string($con,$_GET['category']);
$query="select * from posts where category='$category'";
}
else
{
  $query="select * from posts ORDER BY id DESC";
}
  $rs=mysqli_query($con,$query);
?>


    <div class="container">


      <div class="blog-header">
        <h1 class="blog- text-success"><span id="matt"></span></h1>
        <p class="lead blog- text-danger">Learn About Code On Geeks Byte Blog</p>
      </div>

      <div class="">

        <div class="blog-main">
          <div  class=" blog-post">
             <?php  if(mysqli_num_rows($rs)>0){ 
                while ($row=mysqli_fetch_array($rs)){ 

                ?>
            <h2 style="margin-top:22px;" class="blog-post-"><a href="single.php?post=<?php echo $row['id']; ?>"><?php echo $row['title']; ?> </a></h2>
            <p class="blog-post-meta">On <?php echo $row['date']; ?> Posted By <?php echo $row['author']; ?> </p>
              
               
            <p> <?php $content=$row['content']; echo substr($content,0,300)."..."; ?> </p>
<a href="single.php?post=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Read More</a><hr>

  <?php }} ?>
            
          </div>

          </div>
<br><br>
<!-- /.blog-post -->
   <!-- /.blog-main -->


