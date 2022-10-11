<?php

echo <<<__PRESS_BUTTON
<div class='mum'>
<form method="POST">
    <input type="hidden" name="press" value="start">
    <input type="image" src='$closed_box' alt="box_start" />
</form>


<div id='unpack'>Don't Open!</div></div>
__PRESS_BUTTON;

?>