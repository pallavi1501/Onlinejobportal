
<?php
//require_once('config.php');
include 'connection.php'


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Applications</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript">
    function myFunction1() {

      if (confirm("Confirm Logout")) {

        window.open('index.php');
  } else {

  }

}

    </script>
  </head>
  <body style="background-color:#FFFDD0 ">






  <div class="bg-image" >
      <nav class="navbar navbar-expand-lg #E0FFFF " >
        <br /><br><br>
        <a href="companyhome.php" target="_self" class="navbar-brand"><button type="button" class="btn btn-outline-primary">Home</button></a>

      </nav>
      <div class="blockquote text-center  ">
          <font face = "Monotype Corsiva" size = "18">Applications</font>

      </div>


<?php
error_reporting(0);
$sql='SELECT companyname1 FROM session';
$retval = mysqli_query($con,$sql);
$ro=mysqli_fetch_array($retval);
$companyname    =   $ro['companyname1'];
$sql='SELECT * FROM applications';
$retval = mysqli_query($con,$sql);
$nums=mysqli_num_rows($retval);
$c=0;
if($retval){
  if(mysqli_num_rows($retval) > 0){
    echo "<div class='container text-center' >";

      echo "<table class='table'>";
       echo "<thead class='thead-dark'>";
          echo "<tr>";
          echo "<th>User id</th>";
          echo "<th>First Name</th>";
          echo "<th>Last Name</th>";
          echo "<th>pnumber</th>";
          echo "<th>Company name</th>";
          echo "<th>Post name</th>";
          echo "<th>Application Code</th>";
          echo "<th>Status</th>";
          echo "</tr>";
          echo "</thead>";
          echo "</div>";
        }
      }
while($ro=mysqli_fetch_array($retval))
{

if($ro['companyname']==$companyname)
{
echo "<tr>";

               echo "<td>" . $ro['userid'] . "</td>";
               echo "<td>" . $ro['firstname'] . "</td>";
               echo "<td>" . $ro['lastname'] . "</td>";
               echo "<td>" . $ro['pnumber'] . "</td>";
                              echo "<td>" . $ro['companyname'] . "</td>";
                              echo "<td>" . $ro['postname'] . "</td>";
                              echo "<td>" . $ro['applicationcode'] . "</td>";
                              echo "<td>" . $ro['status'] . "</td>";


           echo "</tr>";

}


} ?>


    </div>

</body>

</html>
