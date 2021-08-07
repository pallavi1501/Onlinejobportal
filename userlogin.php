<?php
//require_once('config.php');
include 'connection.php'
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="background-color:	#FFFDD0">
    <?php

    if(isset($_POST['create']))
  {
    $userid     =   $_POST['userid'];

    $password   =   $_POST['password'];

    $res = mysqli_query($con,"select* from users where userid='$userid'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
  echo '<script>alert("sucessful login");
  window.open("home.php");</script>'
  ;
}
else
{
  echo '<script>alert("LoginUnsuccessful Check your Password and user id");
</script>'
;
}
  }
     ?>





      <a href="index.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary">Home</button></a>
      <a href="usersignup.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary">Signup</button></a>
      <div class="container">
        <img src="profile.png" alt="" class="rounded mx-auto d-block " style="max-width:25%">

      </div>
    <form  method="post">
      <div class="blockquote text-center ">
          <h1 color="">Login</h1>
      </div>
    <div class="form-group row ">
      <label for="userid" class="col-sm-2 col-form-label">Enter your id</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="userid" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label" >Enter your Password</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password"  required>
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
