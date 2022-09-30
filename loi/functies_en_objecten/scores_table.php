<?php  //function for generating a scores table

//init
display_score_tables();


function display_score_tables() {
    // start table and header
    echo "<table><tr><th colspan='5'>Hoe vaak komen scores voor?</th></tr>"."\n";
    
    $td_count = 0;  //counter for echoed td cell
    for ($i = 0; $i < 16; $i++) {
        //create new row after 5 td cell
        if ($i == 0 || $i % 5 == 0) {
            echo "<tr>"."\n";
        };
        
        //fill bg color for evey other td cell    
        if ($i == 0 || $i % 2 == 0) {
            echo "<td class='td_color'>" . display_score($i) . "</td>"."\n";
            $td_count += 1;
        }
        else {
            echo "<td>" . display_score($i) . "</td>"."\n";
            $td_count++;
        };
       
       //close row after 5 td cells
       if ($td_count == 5) {
           echo"</tr>"."\n";
           $td_count = 0;
       };  
    };
    echo"</tr>"."\n";  // closing last td cell
    echo "</table>";
}
?>