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


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>List of Users</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
 
<table class="table table-bordered">
 <thead>
 <tr>
 <th>ID</th>
 <th>Name</th>
 <th>Email</th>
 </tr>
 </thead>
 <tbody>
 <tr>

<?php
 
 $servername = "us-cdbr-east-03.cleardb.com";
$username = "b474b95ea4f970";
$password = "46b36be7";
$db = "heroku_989d675bc42ca01";
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * from user_data";

$result = $conn->query($sql);
 
 while($row = $result->fetch_assoc())
 {
 echo"<td>".$row['user_id']."</td>";
 echo"<td>".$row['first_name']." ".$row['last_name']."</td>";
 echo"<td>".$row['email']."</td>"; 
 echo "</tr>";
 }
 $conn->close();
 ?>
</table>

</div>
</body>
</html>