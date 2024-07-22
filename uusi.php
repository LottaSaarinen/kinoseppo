<?php

include 'yla.php';
$user_input = $_POST['user_input'];

$forbidden_words = array('CREATE','DELETE','DROP','TRUNCATE','TRUNC','INSERT','UPDATE','COPY','GRANT','REVOKE','PROCEDURE','FUNCTION','RETURNS','HREF');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['user_input'];
    $data_lower = strtolower($data); // Muunna syöte pieniksi kirjaimiksi

    // Tarkista kielletyt sanat
    foreach ($forbidden_words as $word) {
        if (strpos($data_lower, strtolower($word)) !== false) {
            die("Virhe: Kielletty sana havaittu!");
        }
     
    }
}

else { 


  $dsn = "mysql:host=localhost;" .
  "dbname={$_SERVER['DB_DATABASE']};" .
  "charset=utf8mb4";
  $user = $_SERVER['DB_USERNAME'];
  $pass = $_SERVER['DB_PASSWORD'];
  $options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
  ];

  try {
    $yht = new PDO($dsn, $user, $pass, $options);
    $nimi = $_POST['nimi'] ;
    $puhelinnumero = $_POST['puhelinnumero'] ;
    $email = $_POST['email'] ;
    $viesti = $_POST['viesti'] ;
 
    if  ( !empty($email) || !empty($viesti)) { 
   
    $lisaa= ("INSERT INTO tarjouspyynto
    (idpyynto,nimi,puhelinnumero,email,viesti,lähetetty)
    VALUES (default,?,?,?,?,now())"); 

 $lause = $yht->prepare($lisaa);

 $lause->execute([$nimi,$puhelinnumero,$email,$viesti]); 
 $id = $yht->lastInsertId(); 
 unset($nimi);
 unset($puhelinnumero);
 unset($email); 
 unset($viesti);
 
header ("Location:viestilahetetty.php"); 
} 



} catch (PDOException $e) {
  $e->getMessage();
}
}
