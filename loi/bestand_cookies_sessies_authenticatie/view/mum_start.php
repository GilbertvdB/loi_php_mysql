<?php
echo "<img src=$closed_box alt='box_start'>". "\n";

echo <<<__PRESS_BUTTON
<form method="POST">
    <input type="submit" name="press" value="Dont Press" />
</form>
__PRESS_BUTTON;
?>