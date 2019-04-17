<?php

include 'qa.php';

function getQA($arr){

  foreach ($arr as $key => $value) {
    echo "<h1>" . $value[Q] . "</h1>";
    echo "<p>" . $value[A] . "</p>";
  }
}
 ?>
