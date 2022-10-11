<?php //Mum start page module

echo <<<__PRESS_BUTTON
    <div class='mum'>
        <form method="POST">
            <input type="hidden" name="press" value="start">
            <input type="image" src="$closed_box" alt="box_start" />
        </form>
    </div>

__PRESS_BUTTON;

?>