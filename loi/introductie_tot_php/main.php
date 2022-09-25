<?php $img_path = "img/profielpic.jpg";
      
      $menu = array('About Me', 'Tech Stack', 'Links', 'Clip');        
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div id=container>
	<div id=image>
		<img src=<?php echo $img_path;?> alt="Profile Pic" style="height: 100%; width: 100%" >
	</div>
	<div id=banner><?php echo "Hello World!";?></div>
	<div class=topnav>
  		<a href="aboutme.php" target="iframe_a"><?php echo $menu[0];?> </a>
  		<a href="stack.php" target="iframe_a"><?php echo $menu[1];?> </a>
  		<a href="links.php" target="iframe_a"><?php echo $menu[2];?> </a>
  		<a href="clip.php" target="iframe_a"><?php echo $menu[3];?> </a>
	</div>
	<div id=info_box>
		 <iframe src="intro.php" name="iframe_a" title="About Me"></iframe> 
	

    </div>
</div>
</body>
</html>
