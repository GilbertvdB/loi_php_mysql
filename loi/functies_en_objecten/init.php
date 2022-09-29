<?php
// initilize all txt document
$init_score = 0;
$fh = fopen("data/highscore.txt", 'w');
fwrite($fh, $init_core);
fclose($fh);


$highscore = 0;
$fh = fopen("data/highscore.txt", 'w');
fwrite($fh, $init_score);
fclose($fh);

?>