<?php 
    $linkedin = "https://www.linkedin.com/in/gvdbiezen";
    $github = "https://github.com/GilbertvdB";
    $contact = "gvanderbiezen@gmail.com";
    $git_img = "img/github.png";
    $link_img = "img/linkedin.png";
    $email_img = "img/email.png";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="styles.css">
<title>Links</title>
</head>
<body>
	<p>Enkele links naar mijn profielen, portofolio en contact:</p>
	<div id="menubox">
	<ul>
		<li><a href=<?php echo $linkedin;?> target="_blank">
			<img src=<?php echo $link_img;?> alt="LinkedIn" style="height: 30px; width: 80px; margin-left: 5px;">
			</a>
		</li>
		<li><a href=<?php echo $github;?> target="_blank">
			<img src=<?php echo $git_img;?> alt="Github" style="height: 30px; width: 90px;">
			</a>
		</li>
		<li><a href=mailto:<?php echo $contact;?> target="_blank">
			<img src=<?php echo $email_img;?> alt="contact" style="height: 30px; width: 40px; margin-left: 5px;">
			</a>
		</li>
	</ul>
	</div>
</body>
</html> 
