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
   
     
    $stmt = $yht->query("SELECT nimi,ohjaaja,vuosi,miespääosa,naispääosa,ikäraja,kesto FROM elokuvat where genre like '%Lastenelokuva%' order by nimi asc"); 
   while ($rivi = $stmt->fetch()) {
 

    echo " <div><table></div>" ;
    echo "   <div><th> Nimi</th></div>" ;
    echo "   <div><th> Ohjaaja</th></div>" ;
    
      echo "  <div><th> Vuosi</th></div>" ;
      echo "  <div><th> Miespääosa</th></div>" ;
      echo "  <div><th> Naispääosa</th></div>" ;
      echo " <div> <th> Ikäraja</th></div>" ;
      echo " <div> <th> Kesto</th></div>" ;
      echo "<br>" ;
      echo "<tr>" ;

      echo " <div> <td>$rivi[nimi]</td></div>" ;
      echo " <div> <td>$rivi[ohjaaja]</td></div>" ;
     
      echo " <div> <td>$rivi[vuosi]</td></div>" ;
      echo " <div> <td>$rivi[miespääosa]</td></div>" ;
      echo "<div> <td>$rivi[naispääosa]</td></div>" ;
      echo "<div><td>$rivi[ikäraja]</td></div>" ;
      echo "<div><td>$rivi[kesto]</td></div>" ;
   
      echo "<div></tr></div>" ;
      echo "<div></table> </div>" ;

   
     } 
 
 }
catch (PDOException $e)
 {
    echo $e->getMessage();
   
}
include "ala.php";

    ?>
