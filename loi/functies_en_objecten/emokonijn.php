<?php
require 'emo_bunny.php';

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
    	<h2>Tables</h2>
    	<?php  
    	//process score
    	
    	
    	
    	?>
    </div>
    </div>
</body>
</html> 
