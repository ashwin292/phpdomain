<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php">Home</a>
	<br><br>
	<?php
		$file = fopen("contacts.txt","r");
		while(! feof($file))
  		{
  			echo fgets($file). "<br />";
  		}

		fclose($file);
	?>

</body>
</html>