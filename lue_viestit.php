<?php
include 'yla.php';

$dsn = "mysql:host=localhost;" .
"dbname={$_SERVER['DB_DATABASE']};" .
"charset=utf8mb4";
$user = $_SERVER['DB_USERNAME'];
$pass = $_SERVER['DB_PASSWORD'];
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];


try {
  $yht= new PDO($dsn, $user, $pass, $options);
  if (!$yht) echo $e->getmessage();


  $stmt = $yht->query(" SELECT idpyynto, nimi, puhelinnumero, email,viesti,lähetetty FROM tarjouspyynto"); 
 while ($rivi = $stmt->fetch()) {


  echo " <span><table></span>" ;

  echo "   <th> Nimi</th>" ;
  echo "   <th> Puhelinnumero</th>" ;
    echo "  <th> Email</th>" ;
    echo "  <th> Viesti</th>" ;
    echo "  <th> Lähetetty</th>" ;


    echo "<tr>" ;
    echo "  <td>$rivi[nimi]</td>" ;
    echo "  <td>$rivi[puhelinnumero]</td>" ;
    echo " <td>$rivi[email]</td>" ;
    echo "  <td>$rivi[viesti]</td>" ;
    echo " <td>$rivi[lähetetty]</td>" ;

    echo "</tr>" ;
    echo "</table> " ;
    echo " <br><br>";


   } 

}
catch (PDOException $e)
{
  echo $e->getMessage();

}
include 'ala.php'; 
?>