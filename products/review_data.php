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

if(isset($_POST['submit']))
{
    $product = $_REQUEST['product'];
    $review = $_REQUEST['review'];

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
            $new[$product] = $val + 0 + $review;
        }
        else{
            $new[$product] = $review + 0;
        }
    }
    else{
    
        $new[$product] = $review + 0;
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