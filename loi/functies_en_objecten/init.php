<?php
// initilize all scores.txt documents for tracking scores
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