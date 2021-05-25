<!DOCTYPE html>
<head></head>
<body>
<?php

	// Curl from whole market user data 
	$ch = curl_init("https://testforbebravecotton.herokuapp.com/hw_company_webpage/wholemarketplace/login_file.php");
	$fp = fopen("pjusers.txt", "w");

	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);

	curl_exec($ch);
	curl_close($ch);
	fclose($fp);
	
	extract($_POST);
	if (!($file = fopen("pjusers.txt", "r"))) {
		print("<title>Error</title></head><body>Could not open password file</body></html>");
		die();
	}

	$userVerified = 0;
	while (!feof($file) && !$userVerified) {

		$line = fgets( $file, 255);
		$line = chop( $line);

		$field = explode(",", $line, 2);
		
		if ( $USERNAME == $field[0]) {
			if (checkPassword($PASSWORD, $field)) {
				$userVerified = 1;
				accessGranted($USERNAME);
			}
			else {
				wrongPassword();
			}
		}
	}
	fclose( $file );
	if (!$userVerified) accessDenied();

    function checkPassword($userpassword, $filedata) {
		if ($userpassword == $filedata[1])
			return true;
		else
			return false;
	}
	function wrongPassword() {
		print("<title>Access Deined</title></head><body style =\"font-family: arial; font-size: 1em; color: blue\"><strong>You entered an invailed password<br />Access has been denied.</strong>");
	}

	function accessDenied() {
    print("<title>Access Deined</title></head><body style =\"font-family: arial; font-size: 1em; color: blue\"><strong>You were denied access to this server<br /></strong>");
	}

	function accessGranted($name){
		#print("<title>Thank You</title></head><body style =\"font-family: arial; font-size: 1em; color: blue\"><strong>Permission has been granted, $name. <br> <a href='main.php'> Go Whole Market Place </a></strong>");
		echo "<p> $name is the whole market place user </p>";
		echo "<form method='post' action='review_data.php'>
        <div style='max-width: 400px;'>
        </div>
        <div style='padding-bottom: 18px;font-size : 24px;'>Product Review</div>
        <div style='padding-bottom: 18px;'>Select a Product<br/>
        <select id='product' name='product' style='max-width : 450px;' class='form-control'>
        <option>Dumbbell</option>
        <option>Bench</option>
        <option>Treadmill</option>
        <option>Stepper</option>
        <option>Rigs_&_Rags</option>
        <option>Cycles</option>
        <option>Rower</option>
        <option>Cross_Trainer</option>
        <option>Stair_Climber</option>
        </select>
        </div>
        <div style='padding-bottom: 18px;'>Rate this product (1:Worst...5:Best)</span><br/>
        <select id='review' name='review' style='max-width : 150px;' class='form-control'>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        </select>
        </div>
        <div style='padding-bottom: 18px;'><input name='submit' value='Submit' type='submit'/></div>
        </form>";
	} 
  ?>
 </body>
</html>






<!-- <form method="post" action="review_data.php">
<div style="max-width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;">Product Review</div>
<div style="padding-bottom: 18px;">Select a Product<br/>
<select id="product" name="product" style="max-width : 450px;" class="form-control">
<option>Dumbbell</option>
<option>Bench</option>
<option>Treadmill</option>
<option>Stepper</option>
<option>Rigs & Rags</option>
<option>Cycles</option>
<option>Rower</option>
<option>Cross Trainer</option>
<option>Stair Climber</option>
</select>
</div>
<div style="padding-bottom: 18px;">Rate this product (1:Worst...5:Best)</span><br/>
<select id="review" name="review" style="max-width : 150px;" class="form-control">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
<div style="padding-bottom: 18px;"><input name="submit" value="Submit" type="submit"/></div>
</form> -->