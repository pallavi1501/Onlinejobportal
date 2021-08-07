<?php
require_once('config.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Application Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="background-color:	#FFFDD0">


    <?php

    if(isset($_POST['create']))
  {
    $userid     =   $_POST['userid'];
    $firstname   =   $_POST['firstname'];
      $lastname   =   $_POST['lastname'];
    $phonenumber=   $_POST['pnumber'];
      $companyname   =   $_POST['companyname'];
        $postname   =   $_POST['postname'];
    $applicationcode   =$_POST['applicationcode'];

    $sql="INSERT INTO applications(userid,firstname,lastname,pnumber,companyname,postname,applicationcode) VALUES(?,?,?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$userid,$firstname,$lastname,$phonenumber,$companyname,$postname,$applicationcode]);
    if($result)
    {
      echo '<script>alert("applied successfully");

      window.open("doc.php");
      window.close("Apply.php");</script>'
      ;
    }
  }
     ?>



      <a href="home.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary">Home</button></a>
      <div class="container">
        <img src="profile.png" alt="" class="rounded mx-auto d-block rounded-circle" style="max-width:25%">
        <script type="text/javascript">
        var appc=Math.floor((Math.random() * 100000) + 1);
          alert("Your application code is"+appc);
          document.write("Your Application Code is"+appc);
        </script>
      </div>
    <form  method="post">
      <div class="blockquote text-center ">
          <h1 color="">Application Form</h1>
      </div>
    <div class="form-group row ">
      <label for="userid" class="col-sm-2 col-form-label">Enter your id</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="userid" required>
      </div>
    </div>
    <div class="form-group row ">
      <label for="firstname" class="col-sm-2 col-form-label">Enter your First Name</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="firstname" required>
      </div>
      <label for="lastname" class="col-sm-2 col-form-label">Enter your Last Name</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="lastname" required>
      </div>
    </div>
    <div class="form-group row ">
      <label for="pnumber" class="col-sm-2 col-form-label">Enter your Phone number</label>
      <div class="col-sm-9">
        <input type="number"  class="form-control"name="pnumber" required>
      </div>
    </div>
    <div class="form-group row ">
      <label for="companyname">&nbsp&nbsp&nbsp&nbspSelect Company&nbsp&nbsp&nbsp</label>
      <select name="companyname" id="companyname">

      <option value="Maple Software">Maple Software</option>
      <option value="Auro Bindo">Auro Bindo</option>
     <option value="Act Fibernet">Act Fibernet</option>

      <option value="Savvy Software">Savvy Software</option>
      <option value="Mankind Pharma">Mankind Pharma</option>

  </select class="form-control">
      <br><label for="postname">&nbsp&nbsp&nbsp&nbspChoose post&nbsp&nbsp&nbsp</label>
      <select name="postname" id="postname">
      <optgroup label="Maple">
        <option value="Software Developer">Software Developer</option>
      </optgroup>
      <optgroup label="Act">
        <option value="Transitions/Migrations Manager">Transitions/Migrations Manager</option>
      </optgroup>
      <optgroup label="Auro">
        <option value="Production Manager">Production Manager</option>
      </optgroup>
      <optgroup label="Savvy">
        <option value="Software Developer Junior">Software Developer Junior</option>
        <option value="Software Developer Senior">Software Developer Senior</option>
      </optgroup>
      <optgroup label="Mankind">
        <option value=" Medical Representative"> Medical Representative</option>
        <option value=" Manager"> Manager</option>
      </optgroup>
    </select>

    </div>

    <div class="form-group row ">
      <label for="applicationcode" class="col-sm-2 col-form-labe">Enter your application id</label>
      <div class="col-sm-9">
        <input type="applicationcode"  class="form-control" name="applicationcode" required>
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
