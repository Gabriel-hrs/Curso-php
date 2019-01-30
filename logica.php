<?php
for ($k = 0; $k <= 3; $k++) {

  for ($i = 1; $i <=5; $i++){
    $star = "";

    for ($j = 0; $j < $i ; $j++) {
      $star .= "*";

      //echo ( str_repeat( $star, $i ) ) . PHP_EOL;
    }

    echo $star . PHP_EOL;

  }

}
?>
