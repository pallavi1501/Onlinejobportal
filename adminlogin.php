<?php
//require_once('config.php');
include 'connection.php'
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="background-color:	#FFFDD0">
    <?php

    if(isset($_POST['create']))
  {
    $adminid     =   $_POST['adminid'];

    $adminpassword   =   $_POST['adminpassword'];

    $res = mysqli_query($con,"select* from admin where adminid='$adminid'and adminpassword='$adminpassword'");
$result=mysqli_fetch_array($res);
if($result)
{
  echo '<script>alert("sucessful login");
  window.open("adminhome.php");</script>'
  ;
}
else
{
  echo '<script>alert("LoginUnsuccessful Check your adminpassword and admin id");
</script>'
;
}
  }
     ?>






      <div class="container">
        <img src="profile.png" alt="" class="rounded mx-auto d-block rounded-circle" style="max-width:25%">

      </div>
    <form  method="post">
      <div class="blockquote text-center ">
          <h1 color="">Login</h1>
      </div>
    <div class="form-group row ">
      <label for="adminid" class="col-sm-2 col-form-label">Enter your id</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="adminid"  autocomplete="off"  required>
      </div>
    </div>

    <div class="form-group row">
      <label for="adminpassword" class="col-sm-2 col-form-label" >Enter your adminpassword</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="adminpassword"  required>
      </div>
    </div>
    <div class="text-center">
            <input type="submit" class="btn btn-outline-primary" name="create" value="Sign In">
            <button type="reset" class="btn btn-outline-primary">reset</button>
        </div>
  </form>



  </script>
  </body>
</html>
