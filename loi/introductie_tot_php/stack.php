<?php 
    $stack =<<<_STACK
        <p> Tot nu toe heb ik ervaring gedaan met de volgende programma's en talen:</p> 
    _STACK;
    
    //lijst van programmas
    $stack_list = array('Python', 'HTML', 'CSS', 'PHP', 'SQLite', 'Github')
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="styles.css">
<title>Stack</title>
</head>
<body>
	<?php echo $stack;
	// de lijst van programmas onder elkaar printen.
	      foreach ($stack_list as $element) { echo "<br>".$element;} 
	?>
</body>
</html>
