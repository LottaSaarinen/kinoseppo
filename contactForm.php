<?php

$dsn = "mysql:host=localhost;dbname={$_SERVER['DB_DATABASE']};charset=utf8mb4";
$user = $_SERVER['DB_USERNAME'];
$pass = $_SERVER['DB_PASSWORD'];
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $yhteys = new PDO($dsn, $user, $pass, $options);

    if (!$yhteys) {
        die("Tietokantayhteys epäonnistui.");
    }

    $nimi = $_POST['nimi'];
    $puhelin = $_POST['puhelinnumero'];
    $email = $_POST['email'];
    $viesti = $_POST['viesti'];

    $lisaa_viesti = "INSERT INTO tarjouspyynto (nimi, puhelinnumero, email, viesti, lahetetty) VALUES (?, ?, ?, ?, NOW())";
    $stmt = $yhteys->prepare($lisaa_viesti);

    if ($stmt->execute([$nimi, $puhelin, $email, $viesti])) {
        header("Location: viesti_lahetetty.php");
        exit();
    } else {
        header("Location: virhe.php");
        exit();
    }
} catch (PDOException $error) {
    echo "Tietokantavirhe: " . $error->getMessage();
    die();
}
?>
