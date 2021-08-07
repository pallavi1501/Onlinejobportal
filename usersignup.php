<?php
require_once('config.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="background-color:	#FFFDD0">
    <?php

    if(isset($_POST['create']))
  {
    $userid     =   $_POST['userid'];
    $username   =   $_POST['username'];
    $phonenumber=   $_POST['pnumber'];
    $password   =   $_POST['password'];

    $sql="INSERT INTO users(userid,username,password,pnumber) VALUES(?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$userid,$username,$password,$phonenumber]);
    if($result)
    {
      echo '<script>alert("sucessfully Registered");
      window.open("home.php");</script>'
      ;
    }
  }
     ?>





      <a href="index.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary">Home</button></a>
      <div class="container">
        <img src="profile.png" alt="" class="rounded mx-auto d-block rounded-circle" style="max-width:25%">

      </div>
    <form  method="post">
      <div class="blockquote text-center ">
          <h1 color="">Registration Form</h1>
      </div>
    <div class="form-group row ">
      <label for="userid" class="col-sm-2 col-form-label">Enter your id</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="userid" required>
      </div>
    </div>
    <div class="form-group row ">
      <label for="username" class="col-sm-2 col-form-label">Enter your Name</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="username" required>
      </div>
    </div>
    <div class="form-group row ">
      <label for="pnumber" class="col-sm-2 col-form-label">Enter your Phone number</label>
      <div class="col-sm-9">
        <input type="number"  class="form-control"name="pnumber" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label" >Enter your Password</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password"  required>
      </div>
    </div>
    <div class="text-center">
            <input type="submit" class="btn btn-outline-primary" name="create" value="Sign up">
            <button type="reset" class="btn btn-outline-primary">reset</button>
        </div>
  </form>



  </script>
  </body>
</html>
