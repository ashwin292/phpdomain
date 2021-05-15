<?php

global $product_array;
$product_array = array();
// $product_array = array(
//   "bench" => 0,
//   "cross_train" => 0,
//   "cycles" => 0,
//   "dumbell" => 0,
//   "rigs&rags" => 0,
//   "rower" => 0,
//   "stair_climber" => 0,
//   "stepper" => 0,
//   "treadmill" => 0,
// );

function updateCookie($name)
{
    $count = 1;

    if(array_key_exists($name, $_COOKIE)){
  
    $count = $_COOKIE[$name] + 1;

  }

  setcookie($name, $count, time() + (60 * 60 * 24));

  setcookie($name."_time", time());

  $reversed = array_reverse($_COOKIE);

for ($i=0; $i < count($reversed); $i++){
	if( ("bench" == key($reversed)) ||
		("cross_train" == key($reversed)) ||
		("cycles" == key($reversed)) ||
		("dumbell" == key($reversed)) ||
		("rigs&rags" == key($reversed)) ||
		("rower" == key($reversed)) ||
		("stair_climber" == key($reversed)) ||
		("stepper" == key($reversed)) ||
		("treadmill" == key($reversed))){
		$new[key($reversed)] = current($reversed);
}

next($reversed);

}
  $new[$name] = $count;

arsort($new);

$myfile = fopen("top_five_products.txt", "w") or die("Unable to open file!");

for ($i=0; $i < count($new) and $i < 5; $i++){
  $txt = key($new).";".current($new)."\n";
  fwrite($myfile, $txt);
  next($new);
}

fclose($myfile);

$rev = $_COOKIE;

for ($i=0; $i < count($rev); $i++){
	if( ("bench_time" == key($rev)) ||
		("cross_train_time" == key($rev)) ||
		("cycles_time" == key($rev)) ||
		("dumbell_time" == key($rev)) ||
		("rigs&rags_time" == key($rev)) ||
		("rower_time" == key($rev)) ||
		("stair_climber_time" == key($rev)) ||
		("stepper_time" == key($rev)) ||
		("treadmill_time" == key($rev))){
		$last[key($rev)] = current($rev);
}

next($rev);

}

  $last[$name."_time"] = time();

  arsort($last);

 

  $myfile = fopen("last_5_visited.txt", "w") or die("Unable to open file!");

  for ($i=0; $i < count($last) and $i < 5; $i++){
    $txt = chop(key($last),"_time").";"."\n";
    fwrite($myfile, $txt);
    next($last);
  }
  
  fclose($myfile);

}
?>