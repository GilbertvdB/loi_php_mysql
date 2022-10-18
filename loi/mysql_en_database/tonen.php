<?php  // artikelen tonen

require_once 'login.php';
include_once 'html_class.php';

// verwijder knop
if (isset($_POST['delete']) && isset($_POST['artikel_nr']))
{
    $nummer = $_POST['artikel_nr'];
    $query = "DELETE FROM artikelen WHERE Artikel_nr='$nummer'";
    $result = $pdo->query($query);
    
    header("Location: index.php");
}


// header & body
echo "<h3>Bestaande artikelen</h3>"."\n";

show_table($pdo);

echo "<hr>"."\n";

echo "<b>Disclaimer: Dit is geen echte winkel.</b>";

HTML::bottom();



// FUNCTIONS
function show_table($pdo) {
    $query = "SELECT * FROM artikelen";
    $result = $pdo->query($query);
    
    echo "<table>\n\t<tr><th>Artikel nr</th><th>Artikel naam</th><th>Prijs</th><th></th><th></th></tr>\n\n"; 
    
    while ($row = $result->fetch(PDO::FETCH_NUM))
    {   
        $r0 = htmlspecialchars($row[0]);  // artikel nummer
        echo "\t\t" . "<tr>";
        for ($K = 0; $K < 3 ; ++$K)
            echo "<td>" . htmlspecialchars($row[$K]) . "</td>\t";
            echo "\n";
            edit_button($r0);  // cell voor aanpasen knop
            delete_button($r0);  // cell voor verwijderen knop
            echo "\t\t" ."</tr>"."\n";
    }
    echo "</table>"."\n";
}


Function edit_button($r0) {
echo <<<__EDIT
            <td><form action="aanpasen.php" method='post'>
                <input type='hidden' name='artikel_nr' value='$r0'>
                <input type="submit" value="Aanpasen"></form></td>\n
__EDIT;
}

Function delete_button($r0) {
echo <<<__DELETE
                <td><form action="tonen.php" method='post'>
                    <input type='hidden' name='delete' value='yes'>
                    <input type='hidden' name='artikel_nr' value='$r0'>
                    <input type="submit" value="Verwijderen"></form></td>\n
__DELETE;
}


?>