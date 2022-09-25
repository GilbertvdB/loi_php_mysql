<?php 
    $name = "Gilbert van der Biezen";
    $title = "Back-end Developer";
    $linkedin = "https://www.linkedin.com/in/gvdbiezen";
    $github = "https://github.com/GilbertvdB";
    $contact = "gvanderbiezen@gmail.com";
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="styles.css">
<title>Intro</title>
</head>
<body>
	<h2 id ="name"><?php echo $name; ?></h2>
	<h2 id ="title"><?php echo $title;?></h2>
	<div id="menubox">
	<ul>
		<li><a href=<?php echo $linkedin;?> target="_blank">LinkedIn</a></li>
		<li><a href=<?php echo $github;?> target="_blank">GitHub</a></li>
		<li><a href=mailto:<?php echo $contact;?> target="_blank">Contact</a></li>
	</ul>
	</div>
</body>
</html> 
