<?php
//artikel verwijderen
require_once 'login.php';

//PDO connect to server
try
{
    $pdo = new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

echo "<h3>Artikel verwijderen</h3>";
echo "<a href='index.php'>Terug naar menu</a>";
//display form
echo <<<_DELETE
<form action="verwijderen.php" method="post"><pre>
Artikel <input type="text" name="artikel_naam"><br>
        <input type="submit" value="VERWIJDEREN">
</pre></form>
_DELETE;


if (isset($_POST['artikel_naam']))
{
    $stmt = $pdo->prepare("DELETE FROM artikelen WHERE Artikel_naam=?");
    $stmt->bindParam(1, $artikel_naam, PDO::PARAM_STR, 40);
    
    $artikel_naam = $_POST['artikel_naam'];
    
    $stmt->execute([$artikel_naam]);
    
    echo "$artikel_naam is verwijderd!";
}


 

echo "<hr>";

?>