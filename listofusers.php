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

    <br>
    <h3 align="center">List of Users in My Company</h3>
    <br>
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

<br>
<h3 align="center">List of Users in Friend's Company</h3>
<br>

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

$curl = curl_init();

 $url = "http://mittaldivya.com/CMPE-272/userFromOthersite.php";

 curl_setopt( $curl, CURLOPT_URL, $url);
 curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true);

 $result = curl_exec($curl);

    if($e = curl_error($curl)) {

        echo $e;
    
    }
    
    else {
        
        $decoded = json_decode($result, true);
    
    }

   foreach($decoded as $row) {
   echo "<tr>";
    echo"<td>".$row['FirstName']." ".$row['LastName']."</td>";
    echo"<td>".$row['Email']."</td>";
    echo"<td>".$row['HomeAddress']."</td>";
    echo"<td>".$row['CellPhone']."</td>"; 
    echo "</tr>";
    }
    curl_close($curl);

 ?>
</table>

<br>
<h3 align="center">List of Users in Another Friend's Company</h3>
<br>

<table class="table table-bordered">
 <thead>
 <tr>
 <th>Name</th>
 <th>Phone</th>
 </tr>
 </thead>
 <tbody>
 <tr>

 <?php

    $curl = curl_init();
    
    $url = "http://blossom.fitthecurve.com/user_list.php";
    
    curl_setopt( $curl, CURLOPT_URL, $url);
    curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($curl);

    if($e = curl_error($curl)) {

        echo $e;
    
    }
    
    else {
        
        $decoded = json_decode($result, true);
    
    }

   foreach($decoded["BlossomGardeners_users"] as $row) {
   echo "<tr>";
    echo"<td>".$row['firstName']." ".$row['lastName']."</td>";
    echo"<td>".$row['mobile']."</td>";
    echo "</tr>";
    }
    curl_close($curl);

 ?>
</table>
</div>
</body>
</html>