<?php //Unpack Gift page module

echo <<<__UNPACK_GIFT
    <div id='gift'>
        <form method="POST">
            <input type="image" src='$gift_box' alt="Submit" width="350" height="350">
        </form>
        <div id='unpack'>Unpack Gift!</div>
    </div>

__UNPACK_GIFT;

?>