<?php  //model class module

include_once 'model/mum.php';

class Model {
    
    function mum_box($state) {
        //retrieve mum info
        $mum = new Mum();
        
        $status = array(
        'gift' => $mum->img_gift(),
        'opened' => $mum->img_opened(),
        'semi' => $mum->img_semi(),
        'closed' => $mum->img_closed(),
        'sound' => $mum->sound_box()
        );
        
        return $status[$state];
    }
    
    //play open and closing sound
    function play_sound() {
        $sound = self::mum_box('sound');
       
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
    
    // open en close mum box pages
    function toon($name, $url, $delay){
        echo    "<script>";
        echo    "setTimeout(function(){" . $name . " = window.open('$url', '_blank');}, $delay);";
        echo    "</script>"."\n";
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
