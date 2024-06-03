<?php

include 'yla.php';

echo "<hr>";
echo "<br>";

$dsn = "pgsql:host=localhost;dbname=lsaarinen";
$user = "db_lsaarinen";
$pass = getenv('DB_PASSWORD');
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

try {
    $yht= new PDO($dsn, $user, $pass, $options);
    if (!$yht) echo $e->getmessage();
   
     
    $stmt = $yht->query("SELECT nimi,ohjaaja,genre,vuosi,miespääosa,naispääosa,ikäraja,kesto FROM elokuvat where genre like '%Lastenelokuva%'"); 
   while ($rivi = $stmt->fetch()) {
 

    echo " <span><table></span>" ;
   // echo " <span><tr></span>" ;
    echo "   <span><th> Nimi</th></span>" ;
    echo "   <span><th> Ohjaaja</th></span>" ;
      echo "  <span><th> Genre</th></span>" ;
      echo "  <span> <th> Vuosi</th></span>" ;
      echo "  <span><th> Miespääosa</th></span>" ;
      echo "  <span><th> Naispääosa</th></span>" ;
      echo " <span> <th> Ikäraja</th></span>" ;
      echo " <span> <th> Kesto</th></span>" ;
     
      echo "<tr>" ;
      echo " <span> <td>$rivi[nimi]</td></span>" ;
      echo " <span> <td>$rivi[ohjaaja]</td></span>" ;
      echo " <span> <td>$rivi[genre]</td></span>" ;
      echo " <span> <td>$rivi[vuosi]</td></span>" ;
      echo " <span> <td>$rivi[miespääosa]</td></span>" ;
      echo "<span> <td>$rivi[naispääosa]</td></span>" ;
      echo "<span><td>$rivi[ikäraja]</td></span>" ;
      echo "<span><td>$rivi[kesto]</td></span>" ;
   
      echo "<span></tr></span>" ;
      echo "<span></table> </span>" ;

   
     } 
 
 }
catch (PDOException $e)
 {
    echo $e->getMessage();
   
}
include "ala.php";

    ?>
