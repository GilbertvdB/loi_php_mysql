<?php  //artikelen toevoegen
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

// artikel toevoegen
echo "<h3>Artikel toevoegen</h3>";
echo "<a href='index.php'>Terug naar menu</a>";

//display form
echo <<<_ADD
<form action="toevoegen.php" method="post"><pre>
Artikel <input type="text" name="artikel_naam"><br>
  Prijs <input type="text" name="prijs"><br>
        <input type="submit" value="TOEVOEGEN">
</pre></form>
_ADD;



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

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     header("simple_crud.php");
// }

echo "<hr>";

?>
