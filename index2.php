<?php $name = $_GET["name"]; $mail = $_GET["email"]; $age = $_GET["age"];?>
<p>
  <?php

    $isDotInEmail = strpos($mail,".");
    $isAtInEmail = strpos($mail,"@");

    $validMail = $isDotInEmail !== false && $isAtInEmail !== false;
    $validAge = is_numeric($age);
    if (strlen($name) < 3) {
      $validName = false;
    }
    else {
      $validName = true;
    }
    $valid = $validName !== false && $validAge !== false && $validMail !== false;

    if ($valid) {
      echo "Accesso riuscito";
    } else {
      echo "Accesso negato";
    }

   ?>
</p>
