<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="index.php">Home</a>
<br>
<br>

<?php

$servername = "us-cdbr-east-03.cleardb.com";
$username = "b474b95ea4f970";
$password = "46b36be7";
$db = "heroku_989d675bc42ca01";
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

if(isset($_POST['update']))
{
	$user_id = mysqli_real_escape_string($conn, $_REQUEST['user_id']);
    $first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $home_address = mysqli_real_escape_string($conn, $_REQUEST['home_address']);
    $home_phone = mysqli_real_escape_string($conn, $_REQUEST['home_phone']);
    $cell_phone = mysqli_real_escape_string($conn, $_REQUEST['cell_phone']);
    $country = mysqli_real_escape_string($conn, $_REQUEST['country']);
    $state = mysqli_real_escape_string($conn, $_REQUEST['state']);
    $zip = mysqli_real_escape_string($conn, $_REQUEST['zip']);

    $sql = "INSERT INTO user_data (user_id, first_name, last_name, email, home_address, home_phone,
            			cell_phone, country, state, zip) VALUES 
            			('$user_id', '$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone', '$country', '$state', '$zip')";
            
            if(mysqli_query($conn, $sql))
            {
            	echo "New User Added Successfully\n";
            }
            else
            {
            	echo "Error: " . $sql . "<br>" . $conn->error;
            }
}

else
{

	$search = $_POST['search'];
$column = $_POST['column'];

$sql = "SELECT * from user_data where $column like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo "<br>". "User ID: ". $row["user_id"]."<br>".
	"Name: ".$row["first_name"]." ". $row["last_name"]."<br>".
	"Email: ". $row["email"]."<br>".
	"Home Address: ". $row["home_address"]."<br>".
	"Home Phone: " .$row["home_phone"]."<br>".
	"Cell Phone: ". $row["cell_phone"]."<br>".
	"Country: ". $row["country"]."<br>".
	"State: ". $row["state"]."<br>".
	"Zip: ". $row["zip"]. "<br>";
}
} else {
	echo "0 records";
}

}

$conn->close();
?>

<br><br>
<a href="srch_and_update.php">Add/Search Again</a>

</body>
</html>