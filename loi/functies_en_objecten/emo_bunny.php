<?php



//class
class emo_bunny {
    public $eyes = ''; //array
    public $bg_color = 'background-color: rgb(252, 249, 240);';
    
    
    function random_eyes() {
        $eyes = array('@', '^','?', '&', '$', 'o', '>', '/', 'x', '*');
        $len_array = count($eyes) - 1;
        $random = rand()&$len_array;
        $eye_l = $eye_r = $eyes[$random];
        //special eyes
        if ($eye_l == '>') {
            $eye_r = '<';
        }
        elseif ($eye_l == '/') {
            $eye_r = '\\';
        }
        
        $this->eyes = array("$eye_l", "$eye_r");
    }
    
    function create_bunny() {
        //init eyes
        $l = $r = '';
        list($l, $r) = $this->eyes;
        
        // bunny
        $bunny = "<div id='bun' style='$this->bg_color'>
<pre>
  ()_()    
  (<span class='eyes'>$l</span>.<span class='eyes'>$r</span>)    
 '(\")(\")'  
</pre></div>";
        
        return $bunny;
    }
    
    function bun_eyes() {
        return $this->eyes;
    }
}

//functions

//top_row_bunnies
function top_row() {
    $top_bunnies = array();
    for($i = 0; $i < 15; $i++) {
        ${"bun_".$i} = new emo_bunny();
        ${"bun_".$i}->random_eyes();
        $eyez = ${"bun_".$i}->eyes;
        $top_bunnies[] = $eyez;
        echo ${"bun_".$i}->create_bunny();
    }
    return $top_bunnies;
}


//bottom_row_bunnies
function bottom_row($top_bunnies) {
    
    $score = 0;
    for($i = 0; $i < 15; ++$i) {
        ${"bunz_".$i} = new emo_bunny();
        ${"bunz_".$i}->random_eyes();
        
        //ogen vergelijken
        $t = $top_bunnies[$i];
        $b = ${"bunz_".$i}->eyes;
        
        if ($t == $b) {
            ${"bunz_".$i}->bg_color = 'background-color: rgb(211, 245, 196);';
            echo ${"bunz_".$i}->create_bunny();
            $score += 1;
        }
        else {
            ${"bunz_".$i}->bg_color = 'background-color: rgb(237, 211, 211);';
            echo ${"bunz_".$i}->create_bunny();
        }
        
    }
    return $score;
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}

?>