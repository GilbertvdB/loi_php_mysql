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

//header
echo "<h1>PC4U Artikelen</h1>";

//links
echo <<<__NAV
<a href="toevoegen.php">Toevoegen</a> | 
Tonen | 
<a href="aanpasen.php">Aanpasen</a> | 
<a href="verwijderen.php">Verwijderen</a>
__NAV;

include_once 'tonen.php';

//create table
function create_table($pdo) {
    $query = "CREATE TABLE artikelen (
        Artikel_nr INT NOT NULL AUTO_INCREMENT,
        Artikel_naam VARCHAR(40) NOT NULL,
        Prijs DECIMAL(10,2) NOT NULL,
        PRIMARY KEY (Artikel_nr)
        )ENGINE InnoDB";
    
    $result = $pdo->query($query);
}

// function get_post($pdo, $var){
//     return $pdo->quote($_POST[$var]);
// }
// //

?>