<?php  //function for generating a scores table

//init
display_score_tables();


function display_score_tables() {
    // start table and header
    echo "<table>"."\n"; 
    echo"<tr><th colspan='5'>Hoe vaak komen scores voor?</th></tr>"."\n";
    
    $td_count = 0;  //counter for echoed td cell
    for ($i = 0; $i < 16; $i++) {
        //create new row after 5 td cell
        if ($i == 0 || $i % 5 == 0) {
            echo "<tr>"."\n";
        };
        
        //fill bg color for evey other td cell.($i is even)    
        if ($i == 0 || $i % 2 == 0) {
            echo "\t<td class='td_color'>" . display_score($i) . "</td>"."\n";
            $td_count += 1;
        }
        else {
            echo "\t<td>" . display_score($i) . "</td>"."\n";
            $td_count++;
        };
       
       //close row after 5 td cells
       if ($td_count == 5) {
           echo"</tr>"."\n";
           $td_count = 0;
       };  
    };
    
    echo"\t<td></td><td></td><td></td><td></td></tr>"."\n";  // closing last td cell and adding 4 empty.(bordercollapse issue)
    echo "</table>"."\n";
}
?>