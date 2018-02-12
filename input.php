<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
</head>
<body>
	<form action="input.php" method="post">

		<input type="text" name="fname" />
        <input type="submit" value="Submit" name ="hui" />
	</form>
	<?php

	if(isset($_POST['hui'])) {
		echo $_POST['fname'];
	}

	 ?>
</body>
</html>