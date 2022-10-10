<?php
session_start();

include_once '../model/html_class.php';

$open = "../" . $_SESSION['open'];

HTML::top_child();
echo "<img src=$open alt='box_open'>";
HTML::bottom();

?>
