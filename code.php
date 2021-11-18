<?php
    // neil degrasse tyson flip a coin thought experiment mentioned in youtube a video i.e. https://www.youtube.com/watch?v=uTChrirK-hw
    // initial population
  	$total_population = 1000;

    for($i=0; $i < $total_population; $i++){
      $arr[] = $i;
    }

    while (count($arr) != 1) {
      $first_address = array_rand($arr);
      $second_address = array_rand($arr);
      $match = [$first_address, $second_address];
      $result = array_rand($match);
      $winner = $result;
      $loser = (0 - $winner) * -1;
      unset($arr[$match[$loser]]);
    }

    echo "Person ".key($arr)." is Winner";
?>
