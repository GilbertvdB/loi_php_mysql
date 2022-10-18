<?php  //index - hoofd pagina

require_once 'login.php';
include_once 'html_class.php';

HTML::top();

// header
echo "<h1>PC4U Artikelen</h1>"."\n";

// links
echo <<<__NAV
<a href="toevoegen.php">Toevoegen</a> | 
Tonen | 
<a href="aanpasen.php">Aanpasen</a> | 
<a href="verwijderen.php">Verwijderen</a>\n
__NAV;

// tabel lijst weergeven
include_once 'tonen.php';

HTML::bottom();

?>