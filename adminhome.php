<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  function myFunction() {

    if (confirm("Confirm Logout")) {
      window.open('index.php');
} else {

}
}
  </script>

  <style media="screen">
  .navbar-custom {
background-color:#E0FFFF  ;
}
  </style>
</head>
<body style="background-color:#FFFDD0">
<nav class="navbar navbar-expand-lg navbar-custom " >
<div class="container">
  <a href="adminhome.php" target="_self" class="navbar-brand" ><button type="button" class="btn btn-outline-primary">Home</button></a>
  <ul class="nav nav-pills ml-auto">
    <li class="nav-item">

    </li>

    <li class="nav-item">
      <a class="nav-link" href="all.php">All Applications</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="new.php">New Jobs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="alljobs.php">All Jobs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" target="_blank" href="allusers.php">All User</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  href="allcompanies.php">All Companies</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  href="addcompanies.php">Add Companies</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  href="deletecompanies.php">Delete Companies</a>
    </li>


    <li class="nav-item">
      <a class="nav-link " href="#"><button type="button" class="btn btn-outline-primary" onclick="myFunction()">Logout</button></a>
    </li>
  </ul>
</div>
</nav>
<div class="blockquote text-center  ">
    <font face = "Monotype Corsiva" size = "15">Welcome to Jobs4U.com</font>
</div>
<div class="container text-center">
  <img src="job1.png" alt="" class="rounded-circle " style="max-width:50%">

  <div class="">
    <p class="text-center"></p>
  </div>
  <div class="blockquote text-center  ">
      <font face = "Monotype Corsiva" size = "15">Admin</font>
  </div>


</div>

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
