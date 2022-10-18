<?php
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

// // aanpasen knop
// if (isset($_POST['edit']) && isset($_POST['artikel_nr']))
// {
//     $nummer = $_POST['artikel_nr'];
//     header("Location: aanpasen.php");
// }

// verwijder knop
if (isset($_POST['delete']) && isset($_POST['artikel_nr']))
{
    $nummer = $_POST['artikel_nr'];
    $query = "DELETE FROM artikelen WHERE Artikel_nr='$nummer'";
    $result = $pdo->query($query);
    
    header("Location: index.php");

}

//tonen
echo "<h3>Bestaande artikelen</h3>";

show_table($pdo);

echo "<hr>";

echo "<b>Disclaimer: Dit is geen echte winkel.</b>";


// FUNCTIONS
//show table
function show_table($pdo) {
    $query = "SELECT * FROM artikelen";
    $result = $pdo->query($query);
    
    echo "<table><tr><th>Artikel nr</th><th>Artikel naam</th><th>Prijs</th><th></th><th></th></tr>"; 
    
    while ($row = $result->fetch(PDO::FETCH_NUM))
    {   
        $r0 = htmlspecialchars($row[0]);  // artikel nummer
        echo "<tr>";
        for ($K = 0; $K < 4 ; ++$K)
            echo "<td>" . htmlspecialchars($row[$K]) . "</td>";
            edit_button($r0);  // cell voor aanpasen knop
            delete_button($r0);  // cell voor verwijderen knop
            echo "</tr>";
    }
    echo "</table>";
}


Function edit_button($r0) {
echo <<<__EDIT
<td>
<form action="aanpasen.php" method='post'>
<input type='hidden' name='edit' value='yes'>
<input type='hidden' name='artikel_nr' value='$r0'>
<input type="submit" value="Aanpasen"></form></td>
__EDIT;
}

Function delete_button($r0) {
echo <<<__DELETE
<td>
<form action="tonen.php" method='post'>
<input type='hidden' name='delete' value='yes'>
<input type='hidden' name='artikel_nr' value='$r0'>
<input type="submit" value="Verwijderen"></form></td>
__DELETE;
}

?>