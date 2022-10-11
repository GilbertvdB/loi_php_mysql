<?php

echo <<<__PRESS_BUTTON
<div class='mum_start'>
<form method="POST">
    <input type="hidden" name="press" value="start">
    <input type="image" src='$closed_box' alt="box_start" />
</form>
</div>


__PRESS_BUTTON;


// <audio id="myBox" controls>
//           <source src='$sound'  type="audio/mpeg">
//         </audio>
?>