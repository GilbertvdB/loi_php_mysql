<?php

require_once 'score_handler.php';
require_once 'emo_bunny.php';


echo "<div class='outer'>"."\n";

echo "<hr>"."\n"."<div class='row1'>"."\n"; 
        $top_row = top_row();
        echo "</div>"."\n"; 
        
        echo "<hr>"."\n"."<div class='row2'>"."\n";
        $bottom_row = bottom_row($top_row);
        echo "</div>"."\n";

        echo "<hr>"."\n"."<div class='score'>"."\n";
        highscore($bottom_row);
        echo "</div>"."\n";        
        
        echo "<hr>"."\n"."<div class='tables'>"."\n";         
        save_score($bottom_row);
        include_once 'scores_table.php';
        echo "</div>"."\n";   

echo "</div>"."\n";
?>