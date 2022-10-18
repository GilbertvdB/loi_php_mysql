<?php  //login file

$host = 'localhost';
$data = 'testdatabase';  // the database
$user = 'root';
$pass = 'root';
$chrs = 'utf8mb4';
$attr = "mysql:host=$host;dbname=$data;charset=$chrs";
$opts =
[
    PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES    => false,
    
];

//PDO connect to server
try
{
    $pdo = new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

//create_table($pdo);

// populate_table($pdo);


//---DB table functions
function create_table($pdo) {
    $query = "CREATE TABLE artikelen (
        Artikel_nr INT NOT NULL AUTO_INCREMENT,
        Artikel_naam VARCHAR(40) NOT NULL,
        Prijs DECIMAL(10,2) NOT NULL,
        PRIMARY KEY (Artikel_nr)
        )ENGINE InnoDB";
    
    $result = $pdo->query($query);
}


function populate_table($pdo) {
    $query = "INSERT INTO artikelen VALUES (NULL, 'Kaas', 2.50),(NULL, 'Grote Kaas', 12.39),
              (NULL, 'Oren Kaas', 0.01),(NULL, 'Tenen Kaas', 155.50),(NULL, 'Gouden Kaas', 12345.89)";
    
    $result = $pdo->query($query);
}


?>