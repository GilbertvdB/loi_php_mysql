<?php

// $bun = new emo_bunny();
// $x = $bun->create_bunny(random_eyes());
// echo "x is $x";
// echo "<br>";
// print_r($bun->eyes);

// $bunz = new emo_bunny();
// $bunz->create_bunny(random_eyes());
// echo "<br>";


// //array test
// // $ar = array($bun, $bunz);
// // print_r($ar);

// echo "<br>";
// // range test 15
// for($i = 0; $i < 16; ++$i) {
//     ${"bun_".$i} = new emo_bunny();
//     ${"bun_".$i}->name = "bun_$i"; 
//     echo ${"bun_".$i}->create_bunny(random_eyes());
// }

// $bun = new emo_bunny();
// echo $bun->bun_eyes();
// $bun->random_eyes();
// echo $bun->create_bunny();




class emo_bunny {
    public $eyes = ''; //array
    public $name = '';
    public $bg_color = 'background-color: rgb(252, 249, 240);';
    
    
    function random_eyes() {
        $eyes = array('@', '^','?', '&', '$', 'o', '>', '/');
        $random = rand()&7;
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
        $bunny = "<div id='bun' style='$this->bg_color'><pre>
  $this->name
  ()_()    
  ($l.$r)    
 '(\")(\")'  
</pre></div>";
        
        return $bunny;
    }
    
    function bun_eyes() {
        return $this->eyes;
    }
}


// function random_eyes() {
//     $eyes = array('@', '^','?', '&', '$', 'o', '>', '/');
//     $random = rand()&7;
//     $eye_l = $eye_r = $eyes[$random];
//     //special eyes
//     if ($eye_l == '>') {
//         $eye_r = '<';
//     }
//     elseif ($eye_l == '/') {
//         $eye_r = '\\';
//     }
    
//     return array("$eye_l", "$eye_r");
// }




?>