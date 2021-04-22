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

<link rel="stylesheet" href="css/users_list/bootstrap.min.css">

<script src="css/users_list/jquery.min.js"></script>

<script src="css/users_list/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
 
<table class="table table-bordered">
 <thead>
 <tr>
 <th>Name</th>
 <th>Email</th>
 <th>Address</th>
 <th>Phone</th>
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
 echo"<td>".$row['first_name']." ".$row['last_name']."</td>";
 echo"<td>".$row['email']."</td>";
 echo"<td>".$row['home_address']."</td>";
 echo"<td>".$row['cell_phone']."</td>"; 
 echo "</tr>";
 }
 $conn->close();
 ?>
</table>

</div>
</body>
</html>