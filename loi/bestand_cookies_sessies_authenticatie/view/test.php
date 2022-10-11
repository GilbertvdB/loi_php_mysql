<?php

$sound = "../content/sounds/open_close.mp3";

// echo <<<__SET
//     <script>
//         var mum = document.getElementById("myBox");
        
//         mum.playbackRate = 3.0;
        
//         </script>
// __SET;

 echo <<<__PLAY
        
        <audio id="myBox" controls>
          <source src='$sound'  type="audio/mpeg">
        </audio>
        
        <script>var Box = document.getElementById("myBox");
                    Box.playbackRate = 2.5;
                    Box.play();            
        </script>        
        __PLAY;


//  audio|video.playbackRate=playbackspeed

<<<__FILE
    <!DOCTYPE html> 
<html> 
<body> 

<button onclick="getPlaySpeed()" type="button">What is the playback speed?</button>
<button onclick="setPlaySpeed()" type="button">Set video to be play in slow motion</button><br> 

<audio id="myVideo" controls>
  <source src="$sound" type="video/mp4">

</audio>

<script>
var vid = document.getElementById("myVideo");

function getPlaySpeed() { 
  alert(vid.playbackRate);
} 

function setPlaySpeed() { 
  vid.playbackRate = 2.5;
} 
</script> 

<p>Video courtesy of <a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>.</p>

</body> 
</html>


__FILE;

?>