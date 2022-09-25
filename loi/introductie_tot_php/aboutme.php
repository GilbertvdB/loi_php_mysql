<?php 

$aboutme =<<<_ABOUTME
    <p>Welkom!</p> 
	
	<p>Mijn naam is Gilbert.</p> 
	<p>Graag wil ik een carriere switch maken naar IT. Nu ben ik in opleiding als back-end python developer bij de LOI.</p> 
    
    <p>Python heb ik afgerond en net gestart met PHP. Ik heb al enige ervaring met HTML en CSS maar dat was jaaaren geleden.
    Leuk om te zien hoe de technologie zich heeft ontwikkeld.</p>
_ABOUTME;
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="styles.css">
<title>Aboutme</title>
</head>
<body>
	<?php echo $aboutme;?>
</body>
</html>
