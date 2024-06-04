<?php

include 'yla.php';

$dsn = "mysql:host=localhost;" . "dbname={$_SERVER['DB_DATABASE']};" . "charset=utf8mb4";
$user = $_SERVER['DB_USERNAME'];
$pass = $_SERVER['DB_PASSWORD'];
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,];

try {
   $yht = new PDO($dsn, $user, $pass, $options);
   if (!$yht) {die ();}
    
   
       $nimi = $_POST['nimi'] ;
       $puhelinnumero = $_POST['puhelinnumero'] ;
       $email = $_POST['email'] ;
       $viesti = $_POST['viesti'] ;
   
       if(!empty($nimi) || !empty($puhelinnumero) || !empty($email) || !empty($viesti) )  { 
      
       $lisaa=("INSERT INTO tarjouspyynto
       (idpyynto,nimi,puhelinnumero,email,viesti,lähetetty)
       VALUES (default,?,?,?,?,now())"); 
   
    $lause = $yht->prepare($lisaa);
    
    $lause->execute([$nimi,$puhelinnumero,$email,$viesti]); 
    $id = $yht->lastInsertId(); 
    unset($nimi);
    unset($puhelinnumero);
    unset($email); 
    unset($viesti);
   
   
   header("Location:pyynto.php"); 

     }
   }
   catch (PDOException $e) { 
       echo $e->getMessage(); die();
   }
       
     
$dsn = "mysql:host=localhost;" ."dbname={$_SERVER['DB_DATABASE']};" ."charset=utf8mb4";
$user = $_SERVER['DB_USERNAME'];
$pass = $_SERVER['DB_PASSWORD'];
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
            

try {
  $yht= new PDO($dsn, $user, $pass, $options);
     if (!$yht) echo $e->getmessage();
 
   
  $stmt = $yht->query(" SELECT idpyynto, nimi, puhelinnumero, email,viesti,lähetetty FROM tarjouspyynto"); 
    while ($rivi = $stmt->fetch()) {


    echo " <span><table></span>" ;
    echo " <span><th> Nimi</th></span>" ;
    echo " <span><th> Puhelinnumero</th></span>" ;
    echo " <span><th> Email</th></span>" ;
    echo " <span> <th> Viesti</th></span>" ;
    echo " <span><th> Lähetetty</th></span>" ;
    echo " <tr>" ;
    echo " <span> <td>$rivi[nimi]</td></span>" ;
    echo " <span> <td>$rivi[puhelinnumero]</td></span>" ;
    echo " <span> <td>$rivi[email]</td></span>" ;
    echo " <span> <td>$rivi[viesti]</td></span>" ;
    echo " <span> <td>$rivi[lähetetty]</td></span>" ;
    echo " <span></tr></span>" ;
    echo " <span></table> </span>" ;

 
   } 

}
catch (PDOException $e) {
  echo $e->getMessage();
}

include 'ala.php'; 
?>