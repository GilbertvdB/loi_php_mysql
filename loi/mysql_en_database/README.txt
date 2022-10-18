===== LOI PhP & MySQL Module ====

== Mysql en Database. ==
------------

  1. login.php dient aangepast te worden met de correcte inlog gegevens tot de gebruikte server.
  2. Twee functies zijn toegevoegd aan login.php om het process voor het maken van een tabel te versnellen indien nodig.
     - create table maakt automatisch een tabel in de database.
     - populate table vult de tabel met enkele gevens indien gewenst.
  3. index.php is de start pagina van dit web app.
  4. Voor elke CRUD-operatie is er een eigen pagina gemaakt.
     - C: toevoegen.php
     - R: tonen.php
     - U: aanpasen.php
     - D: delete.php
  5. Een export van mijn gebruikte sql tabel is toegevoegd aan dit document als copy. (artikelen.sql)