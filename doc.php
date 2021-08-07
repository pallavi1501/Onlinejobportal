<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body style="background-color:	#FFFDD0">
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file"
                  name="my_image" class="form-control">
           <input type="number" name="applicationcode"class="form-control" placeholder="ID" value="">
           <input type="submit"
                  name="submit"class="form-control"
                  value="Upload">

     </form>
</body>
</html>
