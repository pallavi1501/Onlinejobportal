<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
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
<body style="background-color:	#FFFDD0">
	<form class="" action="" method="post">
    <label for="id">Enter ID </label>
		<input type="text" name='id' class="form-control" />
		<input type="submit" name="create" class="form-control" value="submit">
	</form>
     
     <?php
		 error_reporting(0);
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);
        if ($_POST['create']) {
					$id=$_POST['id'];
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {
							if ($images['id']==$id) {?>

             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>

    <?php } } } }?>
</body>
</html>
