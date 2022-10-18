<?php  // artikelen toevoegen

require_once 'login.php';
include_once 'html_class.php';

HTML::top();

// header & menu links
echo "<h3>Artikel toevoegen</h3>"."\n";
echo "<a href='index.php'>Terug naar menu</a>"."\n";

// display form
echo <<<_ADD
<form action="toevoegen.php" method="post"><pre>
Artikel <input type="text" name="artikel_naam"><br>
  Prijs <input type="text" name="prijs"><br>
        <input type="submit" value="TOEVOEGEN">
</pre></form>\n
_ADD;

// check if all info has been entered & process request.
if (isset($_POST['artikel_naam'])   &&
    isset($_POST['prijs']))
{
    $stmt = $pdo->prepare('INSERT INTO artikelen VALUES (NULL, ?, ?)');
    $stmt->bindParam(1, $artikel_naam, PDO::PARAM_STR, 40);
    $stmt->bindParam(2, $prijs, PDO::PARAM_STR);
    
    $artikel_naam = $_POST['artikel_naam'];
    $prijs = $_POST['prijs'];
    
    $stmt->execute([$artikel_naam, $prijs]);
    
    echo "$artikel_naam is toegevoegd!";
}

echo "<hr>"."\n";

HTML::bottom();

?>
