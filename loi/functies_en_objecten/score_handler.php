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
    return "Score $nummer komt $aantal voor.";
}


function highscore($score) {
    $fh = fopen("data/highscore.txt", 'r');
    $highscore = fgets($fh);
    fclose($fh);
    
    if ($score > $highscore) {
        $highscore = $score;
        $file_h = fopen("data/highscore.txt", 'w');
        fwrite($file_h, $highscore);
        fclose($file_h);
    }
    
    //display scores
    echo "<h3>Highscore: ($highscore)</h3>";
    echo "<h3>Score: ($score)</h3>";
}

?>