<?php

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

arsort($new);

echo "<h2 align=\"center\">Top 5 Visited Products</h2><br><br>";

echo "<ul style=\"list-style-type:none\"align=\"center\">";

for ($i=0, $j=0; $i < 5 and $j < count($new); $i++, $j++){

	switch (key($new)) {
		case "bench":
			echo "<br><li>
					<h4>Bench</h4>
					<img width=\"300\" height=\"300\" src=\"../images/bench.jpg\" alt=\"My Image\">
					</li>";
			break;

		case "cross_train":
			echo "<br><li>
					<h4>Cross Trainer</h4>
					<img width=\"300\" height=\"300\" src=\"../images/cross_train.jpg\" alt=\"My Image\">
					</li>";
			break;

		case "cycles":
			echo "<br><li>
					<h4>Cycles</h4>
					<img width=\"300\" height=\"300\" src=\"../images/cycles.jpg\" alt=\"My Image\">
					</li>";
			break;

		case "dumbell":
			echo "<br><li>
					<h4>Dumbbell</h4>
					<img width=\"300\" height=\"300\" src=\"../images/weight.jpg\" alt=\"My Image\">
					</li>";
			break;

		case "rigs&rags":
			echo "<br><li>
					<h4>Rigs & Rags</h4>
					<img width=\"300\" height=\"300\" src=\"../images/rigs.JPG\" alt=\"My Image\">
					</li>";
			break;

		case "rower":
			echo "<br><li>
					<h4>Rower</h4>
					<img width=\"300\" height=\"300\" src=\"../images/rower.png\" alt=\"My Image\">
					</li>";
			break;

		case "stair_climber":
			echo "<br><li>
					<h4>Stair Climber</h4>
					<img width=\"300\" height=\"300\" src=\"../images/stair_climber.jpeg\" alt=\"My Image\"></li>";
			break;

		case "stepper":
			echo "<br><li>
					<h4>Stepper</h4>
					<img width=\"300\" height=\"300\" src=\"../images/stepper.jpg\" alt=\"My Image\">
					</li>";
			break;

		case "treadmill":
			echo "<br><li>
					<h4>Treadmill</h4>
					<img width=\"300\" height=\"300\" src=\"../images/treadmill.jpg\" alt=\"My Image\">
					</li>";
			break;

	}


	// echo "Key : " . key($new) . " Value : " . current($new) . "<br>";
next($new);

}

echo "</ul>";

?>