<?php
session_start();

include_once '../model/html_class.php';

$semi = "../" . $_SESSION['semi'];

HTML::top_child();
echo "<img src=$semi alt='box_openclose'>";
HTML::bottom();

?>