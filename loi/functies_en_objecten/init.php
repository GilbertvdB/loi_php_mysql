<?php
// initilize all txt document
$init_score = 0;


$fh = fopen("data/highscore.txt", 'w');
fwrite($fh, $init_score);
fclose($fh);


for($i = 0; $i < 16; ++$i) {
    $fh = fopen("data/score_$i.txt", 'w');
    fwrite($fh, $init_score);
    fclose($fh);
   }
?>