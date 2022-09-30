<?php


class emo_bunny {
    public $eyes = ''; //array
    public $name = '';
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


?>