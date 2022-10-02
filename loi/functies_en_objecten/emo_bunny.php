<?php

//class
class emo_bunny {
    public $eyes = ''; //array type
    public $bg_color = 'background-color: rgb(252, 249, 240);';  //default bg color
    
    
    function random_eyes() {
        $eyes = array('@', '^','?', '&', '$', 'o', '>', '/', 'x', '*');
        $len_array = count($eyes) - 1;
        $random = rand(0, $len_array);
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
        
        // display bunny
        $bunny = "\t<div class='bun' style='$this->bg_color'>
\t<pre>
 ()_()    
 (<span class='eyes'>$l</span>.<span class='eyes'>$r</span>)    
<span id='foot'>'(\")(\")'</span>
</pre>"."\n"."</div>"."\n";
        
        return $bunny;
    }

}

//functions

//top_row_bunnies
function top_row() {
    $top_bunnies = array(); //storing eyes
    $objects = array();  //storing bunnies
    // generate 15 emo bunnies.
    for($i = 0; $i < 15; $i++) {
        ${"bun_".$i} = new emo_bunny();
        ${"bun_".$i}->random_eyes();
        $eyez = ${"bun_".$i}->eyes;
        $top_bunnies[] = $eyez;
        $bunny = ${"bun_".$i}->create_bunny();
        $objects[] = $bunny;

    };
    // display generated bunnies
    for($i = 0; $i < 15; $i++) {
        echo $objects[$i];
    }    
    return $top_bunnies;
}


//bottom_row_bunnies
function bottom_row($top_bunnies_eyes) {
    
    $score = 0;
    for($i = 0; $i < 15; ++$i) {
        ${"bunz_".$i} = new emo_bunny();
        ${"bunz_".$i}->random_eyes();
        
        //compare top & bottom eyes.
        $t = $top_bunnies_eyes[$i];
        $b = ${"bunz_".$i}->eyes;
        
        //set bg colors if match or no match
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
    
}

?>