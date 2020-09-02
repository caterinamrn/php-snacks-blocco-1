<?php

  $min = 1;
  $max = 50;
  $nItems = 15;


    $newArray = [];
    while (count($newArray) < $nItems) {
      $number = rand($min, $max);
      if (!in_array($number, $newArray)) {
        $newArray[] = $number;
      }
    }

    var_dump($newArray);


?>
