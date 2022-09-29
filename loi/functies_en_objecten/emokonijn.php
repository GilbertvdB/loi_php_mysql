<?php
require 'emo_bunny.php';
require 'score_handler.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content=" text/html;charset=utf-8">
    <link rel="stylesheet" href="css/main.css">
<title>Page Title</title>
</head>
<body>
	<div id="container">
    <div id="row1"><hr>
        <?php 
        //top_row_bunnies
        for($i = 0; $i < 11; ++$i) {
            ${"bun_".$i} = new emo_bunny();
            ${"bun_".$i}->name = "bun_$i";
            ${"bun_".$i}->random_eyes();
            echo ${"bun_".$i}->create_bunny();
        }
        
        echo "<br>";
        ?>
    </div>
    <div id="row2"><hr>
        <?php 
        //bottom_row_bunnies
        $score = 0;
        for($i = 0; $i < 11; ++$i) {
            ${"bunz_".$i} = new emo_bunny();
            ${"bunz_".$i}->name = "bunz_$i";
            ${"bunz_".$i}->random_eyes();
           
            //compare eyes
            $t = ${"bun_".$i}->eyes;
            $b = ${"bunz_".$i}->eyes;
            
            
            if ($t == $b) {
                ${"bunz_".$i}->bg_color = 'background-color: rgb(211, 245, 196);';
                echo ${"bunz_".$i}->create_bunny();
                $score += 1;
            }
            else {
                ${"bunz_".$i}->bg_color = 'background-color: rgb(245, 196, 196);';
                echo ${"bunz_".$i}->create_bunny();
            }
            
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        ?>
    </div>
    <div id="scrore"><hr>
    <?php 
    $fh = fopen("data/highscore.txt", 'r');
    $highscore = fgets($fh);
    fclose($fh);
    
    if ($score > $highscore) {
        $highscore = $score;
        $fh = fopen("data/highscore.txt", 'w');
        fwrite($fh, $highscore);
        fclose($fh);
    }
    
    echo "<h3>Highscore: $highscore</h3>";
    echo "<h3>Score: $score</h3>";
    ?>
    </div>
    <div id='tables'><hr>
    	
    	<?php save_score($score);?>
    	
  <table>
  <tr>
    <th colspan="5">Hoe vaak komen scores voor?</th>
  </tr>
  <tr>
    <td class="td_color"><?php display_score(0);?></td>
    <td><?php display_score(1);?></td>
    <td class="td_color"><?php display_score(2);?></td>
    <td><?php display_score(3);?></td>
    <td class="td_color"><?php display_score(4);?></td>                           
  </tr>
  <tr>
    <td><?php display_score(5);?></td>
    <td class="td_color"><?php display_score(6);?></td>
    <td><?php display_score(7);?></td>
    <td class="td_color"><?php display_score(8);?></td>
    <td><?php display_score(9);?></td>                                 
  </tr>
   <tr>
    <td><?php display_score(10);?></td>
    <td><?php display_score(11);?></td>
    <td><?php display_score(12);?></td>
    <td><?php display_score(13);?></td>
    <td><?php display_score(14);?></td>                                 
  </tr>
  <tr>
	<td><?php display_score(15);?></td>                              
  </tr>
</table> 
    	<?php  
    	//process score
    	
    	
    	
    	?>
    </div>
    </div>
</body>
</html> 
