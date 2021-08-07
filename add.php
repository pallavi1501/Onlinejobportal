<?php
require_once('config.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Jobs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="background-color:	#FFFDD0">


    <?php

    if(isset($_POST['create']))
  {
    $companyid     =   $_POST['companyid'];
    $companyname   =   $_POST['companyname'];
        $postname   =   $_POST['postname'];
    $jobid   =$_POST['jobid'];

    $sql="INSERT INTO jobs(companyid,companyname,postname,jobid) VALUES(?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$companyid,$companyname,$postname,$jobid]);
    $sql="INSERT INTO oldjobs(companyid,companyname,postname,jobid) VALUES(?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$companyid,$companyname,$postname,$jobid]);
    if($result)
    {
      echo '<script>alert("Job Posted");

      window.open("doc.php");
    </script>'
      ;
    }
  }
     ?>



      <a href="companyhome.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary">Home</button></a>
      <div class="container">

        <script type="text/javascript">
        var jc=Math.floor((Math.random() * 1000) + 1);
          alert("Your job code is"+jc);
          document.write("Your Job Code is"+jc);
        </script>
      </div>
    <form  method="post">
      <div class="blockquote text-center ">
          <h1 color="">Add job</h1>
      </div>
    <div class="form-group row ">
      <label for="companyid" class="col-sm-2 col-form-label">Enter company id</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="companyid" required>
      </div>
    </div>
    <div class="form-group row ">
      <label for="companyname" class="col-sm-2 col-form-label">Enter your Company Name</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="companyname" required>
      </div>

    </div>
    <div class="form-group row ">
      <label for="postname" class="col-sm-2 col-form-label">Enter post name</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control"name="postname" required>
      </div>
    </div>


    <div class="form-group row ">
      <label for="jobid" class="col-sm-2 col-form-labe">Enter your job id</label>
      <div class="col-sm-9">
        <input type="jobid"  class="form-control" name="jobid" required>
      </div>
    </div>
    <div class="text-center">
            <input type="submit" class="btn btn-outline-primary" name="create" value="Add Job">
            <button type="reset" class="btn btn-outline-primary">reset</button>
        </div>
  </form>



  </script>
  </body>
</html>
