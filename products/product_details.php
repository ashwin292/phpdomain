<?php

if(function_exists($_GET['f'])) {
   $_GET['f']();
}

function getTop5Products()
{
   $myfile = fopen("top_five_products.txt", "r") or die("Unable to open file!");
   while(!feof($myfile))
   {
      $line = fgets($myfile);
      echo $line;
   }
   fclose($myfile);
}


function getTop5Reviews()
{
   $myfile = fopen("review_data.txt", "r") or die("Unable to open file!");
   while(!feof($myfile))
   {
      $line = fgets($myfile);
      echo $line;
   }
   fclose($myfile);
}

function getLast5VisitedProd()
{
   $myfile = fopen("last_5_visited.txt", "r") or die("Unable to open file!");
   while(!feof($myfile))
   {
      $line = fgets($myfile);
      echo $line;
   }
   fclose($myfile);
}



?>