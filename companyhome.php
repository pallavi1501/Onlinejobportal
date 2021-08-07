<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php
  error_reporting(0);
if(isset($_POST['logout']))
{


$sql='DELETE FROM session';
$retval = mysqli_query($con,$sql);
echo '<script>window.open("index.php");</script>';
}

  ?>
  <style media="screen">
  .navbar-custom {
background-color:#E0FFFF  ;
}
  </style>
</head>
<body style="background-color:#FFFDD0">
<nav class="navbar navbar-expand-lg navbar-custom " >
<div class="container">
  <a href="home.php" target="_self" class="navbar-brand" ><button type="button" class="btn btn-outline-primary">Home</button></a>
  <ul class="nav nav-pills ml-auto">
    <li class="nav-item">

    </li>

    <li class="nav-item">
      <a class="nav-link" href="applications.php">Applications</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="res1.php">View Resumes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="jobs.php">Jobs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" target="_blank" href="add.php">Add Jobs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  href="delete.php">Remove Jobs</a>
    </li>
    <li class="nav-item">  <a class="nav-link" href="aboutus2.php">About us</a></li>
    <li class="nav-item">
    <form class="" action="" method="post">
        <a class="nav-link " href="#"><button type="submit" class="btn btn-outline-primary" name="logout">Logout</button></a>
    </form>
    </li>
  </ul>
</div>
</nav>
<div class="blockquote text-center  ">
    <font face = "Monotype Corsiva" size = "15">Welcome to Jobs4U.com</font>
</div>
<div class="container text-center">
  <img src="comp.png" alt="" class="rounded-circle " style="max-width:30%">

  <div class="">
    <p class="text-center">Want to hire Creative , Experienced , Skilled , trained , Well you are at the Right Place.You can post your jobs in our website and receive applications.Select the suitable candidate from the applications and shortlist the by viewing their resumes .
    </p>
  </div>



</div>
 <br><br>

<br><br>

<footer class="page-footer font-small dark " style="background:#DCDCDC">

<div class="footer-copyright text-center py-3 jumbotron ">
<p>Contact us at : jobs4u@gmail.com</p>
<p>
  twitter : @jobs4u
</p>
<p>whatsapp : 23456-876</p>
</div>

</footer>

</body>
</html>
