<?php
require_once('config.php');
 ?>
<?php
//require_once('config.php');
include 'connection.php'

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADD Companies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="background-color:#FFFDD0 ">






  <div class="bg-image" >
      <nav class="navbar navbar-expand-lg #E0FFFF " >
        <br /><br><br>
        <a href="adminhome.php" target="_self" class="navbar-brand"><button type="button" class="btn btn-outline-primary">Home</button></a>

      </nav>
      <div class="blockquote text-center  ">
          <font face = "Monotype Corsiva" size = "18">Delete Companies</font>

      </div>



      <form  method="post">

      <div class="form-group row ">
        <label for="companyid" class="col-sm-2 col-form-label">Enter Company id</label>
        <div class="col-sm-9">
          <input type="text"  class="form-control" name="companyid" required>
        </div>
      </div>

      <div class="text-center">
              <input type="submit" class="btn btn-outline-primary" name="create" value="Delete Company">
              <button type="reset" class="btn btn-outline-primary">reset</button>
          </div>
    </form>
      <?php

      if(isset($_POST['create']))
    {
      $companyid     =   $_POST['companyid'];


      $sql="DELETE FROM  company WHERE companyid=?";
      $stmtinsert=$db->prepare($sql);
      $result=$stmtinsert->execute([$companyid]);
      if($result)
      {
        echo '<script>alert("Sucessfully Deleted");
        window.open("adminhome.php");</script>'
        ;
      }
    }
?>


    </div>

</body>

</html>
