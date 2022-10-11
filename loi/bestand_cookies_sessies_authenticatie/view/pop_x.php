<?php  //first Mum state pop up page - opening box
session_start();

include_once '../model/html_class.php';

$semi = "../" . $_SESSION['semi'];

HTML::top_child();
echo "  <div id='img'><img src='$semi' alt='box_openclose'></div>"."\n";
HTML::bottom();

?>
