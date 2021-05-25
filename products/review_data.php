<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="../index.php">Home</a>
<br>
<br>

<?php

if(isset($_POST['submit']))
{
    $product = $_REQUEST['product'];
    $review = $_REQUEST['review'];

    $count = 1;

    if(array_key_exists($product."_count", $_COOKIE)){
  
    $count = $_COOKIE[$product."_count"] + 1;

  }

  setcookie($product."_count", $count, time() + (60 * 60 * 24));


    $myfile = fopen("review_data.txt", "r") or die("Unable to open file!");
    while(!feof($myfile))
    {
       $line = rtrim(fgets($myfile));

       $arr = explode(";",$line);
       if($arr[0] and $arr[1])
       {
        $new[$arr[0]] = $arr[1];
       }
       
    }

    fclose($myfile);

    $myfile = fopen("review_data.txt", "w") or die("Unable to open file!");

    if(!empty($new))
    {
        if(array_key_exists($product, $new))
        {
            $val = $new[$product];
            $new[$product] = round(((($val + 0)*$_COOKIE[$product."_count"])+$review)/$count, 2);
        }
        else{
            $new[$product] = ($review + 0);
        }
    }
    else{
    
        $new[$product] = ($review + 0);
    }

    arsort($new);

    for ($i=0; $i < count($new) and $i < 5; $i++){
        $txt = key($new).";".current($new)."\n";
        fwrite($myfile, $txt);
        next($new);
      }


    fclose($myfile);

}
?>

</body>
</html>