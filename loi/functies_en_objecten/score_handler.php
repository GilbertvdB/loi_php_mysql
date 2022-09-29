<?php
// functions to handle scores

// $score = 0;

// save_score($score);

function save_score($x) {
    $read_f = fopen("data/score_$x.txt", 'r');
    $file_score = fgets($read_f);
    fclose($read_f);
    
    
    $write_f = fopen("data/score_$x.txt", 'w');
    fwrite($write_f, $file_score += 1);
    fclose($write_f);
}


function get_score($x) {
    $read_f = fopen("data/score_$x.txt", 'r');
    $file_score = fgets($read_f);
    fclose($read_f);
    return $file_score;
}

function display_score($nummer) {
    $aantal = get_score($nummer);
    echo "Score $nummer komt $aantal voor.";
}

?>