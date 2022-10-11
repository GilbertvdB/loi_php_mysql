<?php  //third Mum state pop up page - closing box
session_start();

include_once '../model/html_class.php';

$semi = "../" . $_SESSION['semi'];

HTML::top_child();
echo "  <div id='img'><img src='$semi' alt='box_openclose'></div>"."\n";
HTML::bottom();

?>
