<?php
  $matches = [
               0 => [
                 "luogo" => "milano",
                 "squadra_casa" => "milano",
                 "squadra_ospite" => "tornio",
                 "punteggio_casa" => "50",
                 "puntreggio_ospiti" => "62"
               ],
               1 => [
                 "luogo" => "cremona",
                 "squadra_casa" => "cremona",
                 "squadra_ospite" => "milano",
                 "punteggio_casa" => "60",
                 "puntreggio_ospiti" => "45"
               ],
               2 => [
                 "luogo" => "torino",
                 "squadra_casa" => "torino",
                 "squadra_ospite" => "cremona",
                 "punteggio_casa" => "60",
                 "puntreggio_ospiti" => "45"
               ]
               // "luogo" => "milano",
             ];

 ?>
 <p>
   <?php
   $num_matches = count($matches);
   echo $num_matches;
    echo $matches[$i]["luogo"];
   for ($i=0; $i < $num_matches; $i++) {
     // code...
     echo "<br>";
     echo $matches[$i]["luogo"] . " ";
     echo $matches[$i]["squadra_casa"] . " ";
     echo " - ";
     echo $matches[$i]["squadra_ospite"] . " ";
     echo $matches[$i]["punteggio_casa"] . " ";
     echo " : ";
     echo $matches[$i]["puntreggio_ospiti"] . " ";

   }
    ?>
 </p>
