<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  function myFunction() {

    if (confirm("Confirm Logout")) {
      window.open('index.php','_self');
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
<nav class="navbar navbar-expand-lg navbar-custom ">
<div class="container">
  <a href="home.php" target="_self" class="navbar-brand" ><button type="button" class="btn btn-outline-primary">Home</button></a>
  <ul class="nav nav-pills ml-auto">
    <li class="nav-item">

    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Search by Place</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Vizag.php">Vizag</a>
        <a class="dropdown-item" href="Hyderabad.php">Hyderabad</a>
        <a class="dropdown-item" href="Banglore.php">Banglore</a></div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Search by Company</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Auro.php">AURO BINDO PHARMA LTD</a>
        <a class="dropdown-item" href="Mankind.php">MANKIND PHARMA</a>
        <a class="dropdown-item" href="Savvy.php">SAVVY SOFTWARE SOLUTIONS</a>
        <a class="dropdown-item" href="Maple.php">MAPLE SOFTWARE PVT LTD</a>
        <a class="dropdown-item" href="Act.php">ACT FIBERNET LTD</a>
        </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Search by Field</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Medical.php">Medical</a>
        <a class="dropdown-item" href="Software.php">Software</a>
        <a class="dropdown-item" href="Telecom.php">Telecom</a></div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Status.php">Status</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#"><button type="button" class="btn btn-outline-primary" onclick="myFunction()">Logout</button></a>
    </li>
  </ul>
</div>
</nav>
<div class="blockquote text-center  ">
    <font face = "Monotype Corsiva" size = "15">Savvy Software Solutions</font>
</div>
<div class="container text-center">
  <img src="savvy1.png" alt="" class=" " style="max-width:50%">

  <div class="">
    <p class="text-center" style="font-size: 20px;">Savvy Software Solutions brings over 25 years of industry experience in software development with a global footprint spanning continents providing entrepreneurial software services to clients. We are passionate about exceeding client satisfaction via rock solid framework model built using the latest technologies.</p>
  </div>


  <div class="text-center">
    <p class="text-uppercase">NEW JOBS TODAY !!</p>

  </div>
</div>

  <div class="card" style=" margin-left: 14%;
     margin-right: 14%;
     width: auto;  background-color: rgba(224,255,255,0.9);">

       <div class="card-body">
         <h5 class="card-title" style=" font-size: 40px;">Software Developer Junior</h5>
           <p class="card-text">Industry Type : IT Services & Consulting<br />
Functional Area : IT Software - Application Programming, Maintenance<br />
Employment Type : Full Time, Permanent<br />
Role Category : Programming & Design<br />
Education<br />
UG :B.Tech/B.E. in Computers<br />
PG :Post Graduation Not Required<br />

PREQUISITIES:<br />
Strong software development skills ASP.NET, MVC, C#<br />
Kendo UI<br />
Microsoft SQL or Oracle<br />
Strong analytical and problem solving skills<br />
Ability to work with minimal supervision, exercise discretion and use independent judgment<br />
Highly motivated to be the best and produce the best<br />
Excellent communication skills<br />


</p>
              <a href="apply.php" target="_blank"><button type="button" class="btn btn-outline-primary">Apply now</button></a>

      </div>


 </div><br><br>
<div class="card" style=" margin-left: 14%;
   margin-right: 14%;
   width: auto;  background-color: rgba(224,255,255,0.9);">
  <div class="card-body">
    <h5 class="card-title" style=" font-size: 40px;">Software Developer Senior</h5>
      <p class="card-text">Industry Type : IT Services & Consulting<br />
Functional Area : IT Software - Application Programming, Maintenance<br />
Employment Type : Full Time, Permanent<br />
Role Category : Programming & Design<br />
Education<br />
UG :B.Tech/B.E. in Computers<br />
PG : M.Tech in Computers, MCA in Computers<br />
<br />
PREQUISITIES:<br />
Strong software development skills ASP.NET, MVC, C#<br />
Kendo UI<br />
Microsoft SQL or Oracle<br />
Strong analytical and problem solving skills<br />
Ability to work with minimal supervision, exercise discretion and use independent judgment<br />
Highly motivated to be the best and produce the best<br />
Excellent <br />


</p>
         <a href="apply.php" target="_blank"><button type="button" class="btn btn-outline-primary">Apply now</button></a>

 </div>
</div>

 <br><br>
<div class="">
  <img src="job5.jpg" alt="" class=" " style="max-width:100%">

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
