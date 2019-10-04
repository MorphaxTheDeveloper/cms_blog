
<?php
  include 'admin/connect.php';
  $query="select * from categories";
  $rs=mysqli_query($con,$query);
?>
              <?php  if(mysqli_num_rows($rs)>0){ 
                while ($row=mysqli_fetch_array($rs)){ 

                ?>
              <li class="label label-info"><strong><a href="index.php?category=<?php echo $row['id'];?>"> <?php echo $row['text']; ?></a></strong></li>
           <?php }} ?>
          </div>
        </div>

      </div>
    </div>

    <footer style="height:auto;background-color:#ad3f3f" class="myfooter container-fluid">
  <div class="container"><br>   
  <p style="text-align:center;color: green;"> Geeks Byte </p> 
  <p style="text-align:center; color:white">  Copyright &copy; 2019 All Rights Reserved </p>
  <p style="text-align:center; color:white"><a href="#">Back to top</a></p>
  </div>
 </footer>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.js"></script>

  </body>
</html>

