<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php">Home</a>
	<br>
	<br>
</body>
</html>

<?php
$file = fopen("userslist.txt","r");
while(! feof($file))
{
	echo fgets($file). "<br />";
}

fclose($file);
?>