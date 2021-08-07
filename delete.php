<?php
require_once('config.php');
error_reporting(0);
 ?>
 <?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Jobs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="background-color:#FFFDD0">
    <?php

    if(isset($_POST['create']))
  {

    $jobid   =   $_POST['jobid'];
    $sql='SELECT companyid FROM session';
    $retval = mysqli_query($con,$sql);
    $ro=mysqli_fetch_array($retval);
    $companyid    =   $ro['companyid'];

    $sql="DELETE FROM  oldjobs WHERE jobid=? AND companyid=?";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$jobid,$companyid]);
    $sql="DELETE FROM  jobs WHERE jobid=? AND companyid=?";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$jobid,$companyid]);

    if($result)
    {
      echo '<script>alert("sucessfully deleted");
      window.open("jobs.php");</script>'
      ;
    }
  }
     ?>





      <a href="companyhome.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary">Home</button></a>
      <div class="container">
        <img src="air9.gif" alt="" class="rounded mx-auto d-block rounded-circle" style="max-width:25%">

      </div>
  <div class="container text-center">

    <form  method="post">
      <div class="blockquote text-center ">
          <h1 color="">Delete Jobs</h1>
      </div>



    <div class="form-group row ">
      <label for="jobid" class="col-sm-2 col-form-label">Enter Job id</label> <br>
      <div class="col-sm-9">
        <input type="number"  class="form-control"name="jobid" required>
      </div>
    </div>

    <div class="text-center">
            <input type="submit" class="btn btn-outline-primary" name="create" value="Delete Job">
            <button type="reset" class="btn btn-outline-primary">reset</button>
        </div>
  </form>
  <?php $sql='SELECT companyname1 FROM session';
  $retval = mysqli_query($con,$sql);
  $ro=mysqli_fetch_array($retval);
  $companyname    =   $ro['companyname1'];
  $sql='SELECT * FROM oldjobs';
  $retval = mysqli_query($con,$sql);
  $nums=mysqli_num_rows($retval);
  $c=0;
  if($retval){
      if(mysqli_num_rows($retval) > 0){
        echo "<div class='container text-center' >";

          echo "<table class='table'>";
           echo "<thead class='thead-dark'>";
              echo "<tr>";
              echo "<th>Company id</th>";
              echo "<th>Company Name</th>";
              echo "<th>Post Name</th>";
              echo "<th>Job id</th>";
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

                   echo "<td>" . $ro['companyid'] . "</td>";
                   echo "<td>" . $ro['companyname'] . "</td>";
                   echo "<td>" . $ro['postname'] . "</td>";
                   echo "<td>" . $ro['jobid'] . "</td>";


               echo "</tr>";

  }


  } ?>




  </div>


  </script>
  </body>
</html>
