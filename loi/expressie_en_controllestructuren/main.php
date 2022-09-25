<?php 
// import PHP file
require 'functions.php';
?>


<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="styles.css">
<title>Bereken je BMI</title>
</head>
<body>
	<div id="container">	
		<div id="info">
			<h2>BMI berekenen</h2>

			<p>De BMI (Body Mass Index) is een internationaal gebruikte maat die laat zien of je een gezond gewicht hebt in verhouding tot je lengte. 
		   	   De BMI geeft een inschatting van hoe gezond je lichaamsgewicht is. Je kunt de BMI berekenen voor vrouwen, mannen en kinderen vanaf 2 jaar.</p>

			<p>De BMI is minder geschikt voor als je heel gespierd bent, zwanger bent, borstvoeding geeft of van Aziatische afkomst bent. 
		       Je middelomtrek geeft een inschatting van de vetverdeling in je lichaam.</p>

			<p>Ieder lichaam is anders. Twijfel je of de uitslag wel bij jou past? Of wil je een persoonlijk advies over je gewicht? Ga dan naar je huisarts.</p>
		
			<P>Bereken hiernaast je BMI.</P>
		
			<?php //start programma bereken BMI
                main(); 
		    ?>
		</div>
		
		<div id="bmiform">
    		<div id="header">Bereken je BMI</div>
            	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            		<strong>Geslacht:</strong><br>
                    <input type="radio" name="geslacht" value="man">Man<br>
                    <input type="radio" name="geslacht" value="vrouw">Vrouw<br>
                    <strong>Lengte (in cm)</strong><br> <input type="text" name="lengte"><br>
                    <strong>Gewicht (in kg)</strong><br> <input type="text" name="gewicht"><br>
                    <strong>Leeftijd</strong><br><input type="text" name="leeftijd"><br><br>
                    <input type="submit" value="Berekenen">
                </form>		
        	</div>
    	<div id="bron"><p>Bron:<a href="https://www.voedingscentrum.nl/nl/bmi-meter" target="_blank">voedingcentrum.nl</a></p></div>
    		
	</div>
</body>
</html>