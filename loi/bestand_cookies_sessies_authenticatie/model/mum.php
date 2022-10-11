<?php

// $a = new Mum();
// echo $a->play_sound();


class Mum {
    public $gift_box = "content/images/gift.jpg";
    public $closed_box = "content/images/box_closed.png";
    public $openclose_box = "content/images/box_open_close.png";
    public $opened_box = "content/images/box_open.png";
    public $sound_box = "content/sounds/open_close.mp3";
    // init sounds
    
    //base meth
    function img_gift() {
        return $this->gift_box;
    }
    
    function img_closed() {
        return $this->closed_box;
    }
    
    function img_semi() {
        return $this->openclose_box;
    }
    
    function img_opened() {
        return $this->opened_box;
    }
    
    function sound_box() {
        return $this->sound_box;
    }
    
    //model meth
    function show_gift() {
        return $this->img_gift();
    }
    
    function play_sound() {
        $sound = $this->sound_box();
        echo <<<__PLAY
        <audio id="myBox">
          <source src='$sound'  type="audio/mpeg">
        </audio>
        
        <script>var Box = document.getElementById("myBox");
                    Box.playbackRate = 2.5;
                    Box.play();            
        </script>
        __PLAY;
    }
    
    
    function play() {
        $sound = $this->sound_box();
        echo <<<__PLAY
        
        
        <script>var Box = document.getElementById("myBox");
                    Box.playbackRate = 2.5;
                    Box.play();            
        </script>
        __PLAY;
    }
    
    function toon($url, $delay) {
        echo <<<__OPEN
        <script>
        setTimeout(function(){
        var pop = window.open('$url','_blank');
        },$delay);
        </script>
        __OPEN;
    }
   
    function close_window($delay) {
        echo <<<__CLOSE
        <script>
        setTimeout(function(){
        window.close();
        },$delay);
        </script>
        __CLOSE;
    }
    
    function open($name, $url, $delay){
        echo    "<script>";
        echo    "setTimeout(function(){" . $name . " = window.open('$url', '_blank');}, $delay);";
        echo    "</script>";
    }
    
    function close($name, $delay) {
        echo <<<__CLOSE
        <script>
        setTimeout(function(){
        $name.close();
        },$delay);
        </script>
        __CLOSE;
    }
}


?>