<?php  // artikel verwijderen

require_once 'login.php';
include_once 'html_class.php';

HTML::top();

// header & menu links
echo "<h3>Artikel verwijderen</h3>"."\n";
echo "<a href='index.php'>Terug naar menu</a>"."\n";

// display form
echo <<<_DELETE
<form action="verwijderen.php" method="post"><pre>
Artikel <input type="text" name="artikel_naam"><br>
        <input type="submit" value="VERWIJDEREN">
</pre></form>\n
_DELETE;


// verwijder artikel
if (isset($_POST['artikel_naam']))
{
    $stmt = $pdo->prepare("DELETE FROM artikelen WHERE Artikel_naam=?");
    $stmt->bindParam(1, $artikel_naam, PDO::PARAM_STR, 40);
    
    $artikel_naam = $_POST['artikel_naam'];
    
    $stmt->execute([$artikel_naam]);
    
    echo "$artikel_naam is verwijderd!";
}

echo "<hr>"."\n";

HTML::bottom();

?>