<?php $vid_path = "vid/clip.mp4"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="styles.css">
<title>Clip</title>
</head>
<body>
	<div id="vid">
    	 <video width="280" height="210" controls>
  			<source src=<?php echo $vid_path; ?> type="video/mp4">
		</video> 
	</div> 
</body>
</html> 