<?php

require_once 'score_handler.php';
require_once 'emo_bunny.php';


echo "<div class='outer'><div class='row1'><hr>"; 
        $top_row = top_row();
      "</div>"; 
        
echo "<div class='row2'><hr>";
        $bottom_row = bottom_row($top_row);
        "</div>";

echo "<div id='scrore'><hr>";
        highscore($bottom_row);
        "</div>";        
        
echo "<div id='tables'><hr>";         
       save_score($bottom_row);
       include_once 'scores_table.php';
     "</div></div>"   

?>