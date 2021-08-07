<?php include "db_conn.php"; ?>
<?php include 'connection.php' ?>
<?php require_once('config.php');
error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 500px;
			height: 500px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body style="background-color:#FFFDD0 ">
<div class="bg-image">
  <nav class="navbar navbar-expand-lg #E0FFFF " >
    <br /><br><br>
    <a href="companyhome.php" target="_self" class="navbar-brand"><button type="button" class="btn btn-outline-primary">Home</button></a>

  </nav>
  <?php $sql='SELECT companyname1 FROM session';
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


  <form method="post">







		<label for="appid">Enter application no</label>
		<input type="text" class="form-control" name="appid" required><br>
		<input type="submit" name="create" class="btn btn-outline-primary" value="Resume">
<input type="submit" name="create2" class="btn btn-outline-primary" value="ShortList">

<input type="submit" name="create3" class="btn btn-outline-primary" value="Rejected">
	</form>
</div>



     <a href="res1.php">&#8592;</a><br>

<?php
if(isset($_POST['create']))
{
  echo '<script>window.open("view.php");</script>';
} ?>
<?php
if(isset($_POST['create2']))
{
  $appid=$_POST['appid'];
  $status='Shortlisted';
  $sql="UPDATE  applications SET status=? WHERE applicationcode=?";
  $stmtinsert=$db->prepare($sql);
  $result=$stmtinsert->execute([$status,$appid]);

}

 ?>
 <?php
 if(isset($_POST['create3']))
 {
   $appid=$_POST['appid'];
   $status='Rejected';
   $sql="UPDATE  applications SET status=? WHERE applicationcode=?";
   $stmtinsert=$db->prepare($sql);
   $result=$stmtinsert->execute([$status,$appid]);

 }

  ?>







</body>
</html>
