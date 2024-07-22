/* if (isset($_POST['user_input'])) {
    
    $nimi = $_POST['nimi'] ;
$puhelinnumero = $_POST['puhelinnumero'] ;
$email = $_POST['email'] ;
$viesti = $_POST['viesti'] ;
 
$lisaa= ("INSERT INTO tarjouspyynto
(idpyynto,nimi,puhelinnumero,email,viesti,lähetetty)
VALUES (default,?,?,?,?,now())"); 
 $lause->bindParam($nimi,$email,$puhelinnumero,$viesti);

 if ($lause->execute()) {
     echo "Tiedot tallennettu onnistuneesti!";
 } else {
     echo "Virhe tietojen tallentamisessa.";
 }
}
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
  


/*
$lause = $yht->prepare($lisaa);

$lause->bindParam([$nimi,$puhelinnumero,$email,$viesti]); 
$id = $yht->lastInsertId(); 
unset($nimi);
unset($puhelinnumero);
unset($email); 
unset($viesti);

//echo "viesti lähetetty";
//header ("Location:viestilahetetty.php"); 



 
echo "Tiedot lisätty onnistuneesti.";
} catch (PDOException $e) {
$e->getMessage();
}
}
/*
?>
if  ( !empty($email) || !empty($viesti)) { 
try {
   $yht = new PDO($dsn, $user, $pass, $options);
        $nimi = $_POST['nimi'] ;
        $puhelinnumero = $_POST['puhelinnumero'] ;
        $email = $_POST['email'] ;
        $viesti = $_POST['viesti'] ;
        $stmt = $yht->prepare("INSERT INTO tarjouspyynto
       (idpyynto,nimi,puhelinnumero,email,viesti,lähetetty)
       VALUES (default,?,?,?,?,now())"); 
        
        
        $stmt->bindParam($nimi,$puhelinnumero,$email,$viesti);
        $stmt->execute([$nimi,$puhelinnumero,$email,$viesti]);
        $stmt = $yht->prepare($lisaa);

        $id = $yht->lastInsertId(); 
        unset($nimi);
        unset($puhelinnumero);
        unset($email); 
        unset($viesti);
        
       header ("Location:viestilahetetty.php"); 

    } catch (PDOException $e) {
        echo "Tietokantavirhe: " . $e->getMessage();
    }}
/*

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

?>