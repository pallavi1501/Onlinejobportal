
<?php
//require_once('config.php');
include 'connection.php'

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="background-color:#FFFDD0 ">






  <div class="bg-image" >
      <nav class="navbar navbar-expand-lg #E0FFFF " >
        <br /><br><br>
        <a href="adminhome.php" target="_self" class="navbar-brand"><button type="button" class="btn btn-outline-primary">Home</button></a>

      </nav>
      <div class="blockquote text-center  ">
          <font face = "Monotype Corsiva" size = "18">ALL Users</font>

      </div>



<?php
$sql='SELECT * FROM users';
$retval = mysqli_query($con,$sql);
$nums=mysqli_num_rows($retval);
$c=0;
if($retval){
    if(mysqli_num_rows($retval) > 0){
      echo "<div class='container text-center' >";

        echo "<table class='table'>";
         echo "<thead class='thead-dark'>";
            echo "<tr>";
            echo "<th>userid</th>";
            echo "<th>User Name</th>";
            echo "<th>Phone Number</th>";
            echo "</tr>";
            echo "</thead>";
            echo "</div>";
          }
        }
while($ro=mysqli_fetch_array($retval))
{


  echo "<tr>";

                 echo "<td>" . $ro['userid'] . "</td>";
                 echo "<td>" . $ro['username'] . "</td>";
                 echo "<td>" . $ro['pnumber'] . "</td>";


             echo "</tr>";

}


?>


    </div>

</body>

</html>
