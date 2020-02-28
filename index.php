<!DOCTYPE html>
<html>
	<head>
		<title>class 5</title>
	</head>
	
	<body>
	<?php

	if(isset($_POST['submit'])){
	$tmp = $_FILES['image']['tmp_name'];
	$img_name = uniqid().".jpg";
	move_uploaded_file($tmp, "photos/".$img_name);
}


	?>


	<form method= "POST" action="" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="submit" value="upload">
	</form>
	
	</body>
</html>

