<?php //artikelen aanpasen
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

echo "<h3>Artikel aanpasen</h3>";
echo "<a href='index.php'>Terug naar menu</a>";

if (isset($_POST['artikel_nr'])) {
    $artikel_nr = $_POST['artikel_nr'];
    echo $artikel_nr;
    echo <<<_UPDATE
<form action="aanpasen.php" method="post"><pre>
Artikel Nummer <input type="text" name="artikel_nr" value="Artikel Nummer" readonly><br>
       Artikel <input type="text" name="artikel_naam"><br>
         Prijs <input type="text" name="prijs"><br>
               <input type="submit" value="AANPASEN">
</pre></form>
_UPDATE;
}
else 
{
    echo <<<_UPDATE
<form action="aanpasen.php" method="post"><pre>
Artikel Nummer <input type="text" name="artikel_nr"><br>
       Artikel <input type="text" name="artikel_naam"><br>
         Prijs <input type="text" name="prijs"><br>
               <input type="submit" value="AANPASEN">
</pre></form>
_UPDATE;
}


//display form
<<<_UPDATE
<form action="aanpasen.php" method="post"><pre>
Artikel Nummer <input type="text" name="artikel_nr" value="Artikel Nummer" readonly><br>
Artikel Nummer <input type="text" name="artikel_nr"><br>
       Artikel <input type="text" name="artikel_naam"><br>
         Prijs <input type="text" name="prijs"><br>
               <input type="submit" value="AANPASEN">
</pre></form>
_UPDATE;

if (isset($_POST['artikel_nr'])   &&
    isset($_POST['artikel_naam'])   &&
    isset($_POST['prijs']))
{
    $stmt = $pdo->prepare("UPDATE artikelen SET Artikel_naam=?, Prijs=? WHERE Artikel_nr=?");
    $stmt->bindParam(1, $artikel_naam, PDO::PARAM_STR, 40);
    $stmt->bindParam(2, $prijs, PDO::PARAM_STR);
    $stmt->bindParam(3, $artikel_nr, PDO::PARAM_STR, 40);
    
    $artikel_nr = $_POST['artikel_nr'];
    $artikel_naam = $_POST['artikel_naam'];
    $prijs = $_POST['prijs'];
    
    $stmt->execute([$artikel_naam, $prijs, $artikel_nr]);
    
    echo "Artikel nummer: $artikel_nr is aangepast naar Artikel: $artikel_naam en Prijs: $prijs!";
}

echo "<hr>";

?>