<?php

for ($i=1; $i <= 100; $i++){
  $vetor = array();

  for ($j=1; $j <= 5; $j++){
    $vetor[$j] = mt_rand(1, 50);
  }

  $matriz[$i] = $vetor;
}

print_r($matriz);

 ?>
