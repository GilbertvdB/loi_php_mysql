<?php
echo "<img src=$gift_box alt='box_gift' style='width:350px;height:350px;'>"."\n";

echo <<<__UNPACK_BUTTON
<form method="POST">
    <input type="submit" name="unpack" value="Unpack Gift!" />
</form>
__UNPACK_BUTTON;

?>