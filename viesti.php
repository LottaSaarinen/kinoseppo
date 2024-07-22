<?php

include 'yla.php';
$user_input = $_POST['user_input'];

$forbidden_words = array('CREATE','DELETE','DROP','TRUNCATE','TRUNC','INSERT','UPDATE','COPY','GRANT','REVOKE','PROCEDURE','FUNCTION','RETURNS','HREF');


function forbidden_word($input, $forbidden_words) {
    foreach ($forbidden_words as $word) {
        if (stripos($input, $word) !== false) {
            return true;
        }
    }
    return false;
}


if (forbidden_word($user_input, $forbidden_words)) {
    header ("Location:virhe.php"); 


    




}
else {  //
//if  ( !empty($email) || !empty($viesti)) {   
  //if (isset($_POST['user_input']) ||( !empty($email) || !empty($viesti))) {
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
    $user_input = $_POST['user_input'];
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


 
echo "Tiedot lisätty onnistuneesti.";
} catch (PDOException $e) {
$e->getMessage();
}
}

