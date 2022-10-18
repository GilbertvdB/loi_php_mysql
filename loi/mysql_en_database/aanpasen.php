<?php  // artikelen aanpasen

require_once 'login.php';
include_once 'html_class.php';

HTML::top();

// header & menu links
echo "<h3>Artikel aanpasen</h3>"."\n";
echo "<a href='index.php'>Terug naar menu</a>"."\n";

// check if post is empty or form submitted - clear form input.
if ((empty($_POST)) || (isset($_POST['submit'])) ) {
    $art_nr_box = 'Artikel Nummer <input type="text" name="artikel_nr"><br>';
}
else {
    $artikel_nr = $_POST['artikel_nr'];
    $art_nr_box =  "Artikel Nummer <input type='text' name='artikel_nr' value=$artikel_nr readonly><br>";
}

// display form with filled or unfilled Artikel Nummer input box.
echo <<<_UPDATE
<form action="aanpasen.php" method="post"><pre>
$art_nr_box
       Artikel <input type="text" name="artikel_naam"><br>
         Prijs <input type="text" name="prijs"><br>
               <input type="submit" name="submit" value="AANPASEN">
</pre></form>\n
_UPDATE;


//  check if all info has been entered & process request.
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
    
    // feebback
    echo "Artikel nummer: $artikel_nr is aangepast naar Artikel: $artikel_naam en Prijs: $prijs!";
}

echo "<hr>"."\n";

HTML::bottom();

?>