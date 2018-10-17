<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyStore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/dialog.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!--FOR LOGIN FORM-->
 

</head>
<body>




<nav class="navbar navbar-expand-sm">
<a href="index.php" class="navbar-brand">MyStore</a>
<div class="collapse navbar-collapse">
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="login.php">Sign In</a>
      
    </li>
    <li class="nav-item">
      <a class="nav-link" href="registration.php">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">cart</a>
    </li>
    
  </ul>
</div>
</nav>
<br>

<!--BODY -->
<div id="demo" class="container carousel slide" data-ride="carousel">
<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  
  <div class="carousel-item active">
    <img src="images/sl5.jpg" alt="mobile" width="100%" height="300">
  </div>
  <div class="carousel-item">
    <img src="images/sl2.jpg" alt="mobile" width="100%" height="300">
  </div>
  <div class="carousel-item">
    <img src="images/sl3.jpg" alt="mobile" width="100%" height="300">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
<?php

    function getid($name)
    {
      $con=mysqli_connect('localhost','root','');
      mysqli_select_db($con,'hotspot') or die("cannot select DB");
      $query=mysqli_query($con,"SELECT cid FROM company WHERE comp='$name'");
      $row=mysqli_fetch_row($query);
      $n=$row[0];
      return $n;
    }
?>
<div class="container">
  <div class="row">
      <div class="col-lg-3">
        <?php $a="Motorola"; $id=getid($a);
        echo "<a href='cust.php?id=$id'>" ?>
      <div class="card card-img-top" style="width:18rem; height=15rem;">
        <image src="images/moto.jpg" alt="card one" class="card-img-top">
      </div></a>
    </div>
    <div class="col-lg-3">
      <?php $a="Oppo"; $id=getid($a);echo "<a href='cust.php?id=$id'>" ?>
      <div class="card card-img-top" style="width:18rem; height=15rem;">
        <image src="images/oppo.png" alt="card one" class="card-img-top">
      </div></a>
    </div>
    <div class="col-lg-3">
       <?php $a="Vivo"; $id=getid($a);echo "<a href='cust.php?id=$id'>" ?>
      <div class="card card-img-top" style="width:18rem; height=15rem;">
        <image src="images/vivo.jpg" alt="card one" class="card-img-top">
</div></a>
    </div>
    <div class="col-lg-3">
      <?php $a="Lenovo"; $id=getid($a);echo "<a href='cust.php?id=$id'>" ?>
      <div class="card card-img-top" style="width:18rem; height=15rem;">
        <image src="images/lenovo.jpg" alt="card one" class="card-img-top">
      </div></a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3">
      <?php $a="Nokia"; $id=getid($a);echo "<a href='cust.php?id=$id'>" ?>
      <div class="card card-img-top" style="width:18rem; height=15rem;">
        <image src="images/nokia.jpg" alt="card one" class="card-img-top">
      </div></a>
    </div>
    <div class="col-lg-3">
    <?php $a="Samsung"; $id=getid($a);echo "<a href='cust.php?id=$id'>" ?>
      <div class="card card-img-top" style="width:18rem; height=15rem;">
        <image src="images/samsung.jpg" alt="card one" class="card-img-top">
      </div></a>
    </div>
    <div class="col-lg-3">
    <?php $a="Asus"; $id=getid($a);echo "<a href='cust.php?id=$id'>" ?>
      <div class="card card-img-top" style="width:18rem;">
        <image src="images/asus.jpg" alt="card one" class="card-img-top">
      </div></a>
    </div>
    <div class="col-lg-3">
    <?php $a="Honor"; $id=getid($a);echo "<a href='cust.php?id=$id'>" ?>
      <div class="card card-img-top" style="width:18rem; height=15rem;">
        <image src="images/hnr.jpg" alt="card one" class="card-img-top">
      </div></a>
    </div>
</div>


</body>
</html>
</html>
