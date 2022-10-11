<?php  //second Mum state pop up page - opened box
session_start();

include_once '../model/html_class.php';

$open = "../" . $_SESSION['open'];

HTML::top_child();
echo "  <div id='img'><img src='$open' alt='box_open'></div>"."\n";
HTML::bottom();

?>
