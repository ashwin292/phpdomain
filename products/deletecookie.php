<?php

setcookie("bench", 0, time() - 100000);
setcookie("cross_train", 0, time() - 100000);
setcookie("cycles", 0, time() - 100000);
setcookie("dumbell", 0, time() - 100000);
setcookie("rigs&rags", 0, time() - 100000);
setcookie("rower", 0, time() - 100000);
setcookie("stair_climber", 0, time() - 100000);
setcookie("stepper", 0, time() - 100000);
setcookie("treadmill", 0, time() - 100000);

setcookie("bench_time", 0, time() - 100000);
setcookie("cross_train_time", 0, time() - 100000);
setcookie("cycles_time", 0, time() - 100000);
setcookie("dumbell_time", 0, time() - 100000);
setcookie("rigs&rags_time", 0, time() - 100000);
setcookie("rower_time", 0, time() - 100000);
setcookie("stair_climber_time", 0, time() - 100000);
setcookie("stepper_time", 0, time() - 100000);
setcookie("treadmill_time", 0, time() - 100000);

setcookie("Bench_count", 0, time() - 100000);
setcookie("Cross_Trainer_count", 0, time() - 100000);
setcookie("Cycles_count", 0, time() - 100000);
setcookie("Dumbbell_count", 0, time() - 100000);
setcookie("Rigs_&_Rags_count", 0, time() - 100000);
setcookie("Rower_count", 0, time() - 100000);
setcookie("Stair_Climber_count", 0, time() - 100000);
setcookie("Stepper_count", 0, time() - 100000);
setcookie("Treadmill_count", 0, time() - 100000);

file_put_contents("last_5_visited.txt", "");
file_put_contents("review_data.txt", "");
file_put_contents("top_five_products.txt", "");


?>