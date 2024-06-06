<?php
include 'yla.php';
?>
<html><body>
    <br><br>
   
 <form action= "haku.php" method="GET">
      <p>HAE ELOKUVAA NIMELTÄ</p><input type ="text" name ='nimi'>
             <input type="submit" value="Hae">
</form>
<form action= "haku.php" method="GET">
    
             <input type="submit"name ='lapset'value="Lastenelokuvat">
</form>
</body></html>

 <?php



    if (isset($_GET['lapset'])) {  
        header("Location:lapset.php");
        
        }   


$dsn = "pgsql:host=localhost;dbname=lsaarinen";
$user = "db_lsaarinen";
$pass = getenv('DB_PASSWORD');
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

try {
    $yht= new PDO($dsn, $user, $pass, $options);
    if (!$yht) echo $e->getmessage();

       $stmt=$_GET['nimi'];
       $statement= "%". $stmt ."%";
        $stmt = $yht->prepare("SELECT vid,nimi,ohjaaja,genre,vuosi,miespääosa,naispääosa,ikäraja,kesto
        FROM elokuvat WHERE nimi ilike ?"); 
       
        $stmt->execute([$_GET['nimi']]);
        $rivi = $stmt->fetch(); 


        if ($rivi) { 
            echo "<div>ID:$rivi[vid]</div>";
            echo " <div>Nimi: $rivi[nimi]</div>";  
            echo " <div>Ohjaaja: $rivi[ohjaaja]</div>"; 
            echo " <div>Genre: $rivi[genre]</div>"; 
            echo " <div>Vuosi: $rivi[vuosi]</div>"; 
            echo " <div>Miespääosa: $rivi[miespääosa]</div>"; 
            echo " <div>Naispääosa: $rivi[naispääosa]</div>"; 
            echo " <div>Ikäraja: $rivi[ikäraja]</div>"; 
            echo " <div>Kesto: $rivi[kesto]</div>"; 
        }
     
        else { 
            echo "<h>Haettavan elokuvan tunnistetta ei ole vielä määritelty <br>
        tai tunnistetta vastaavaa elokuvaa ei löytyny</h><br>"; 
        
        }   }

catch (PDOException $e)
 {
    echo $e->getMessage();  
}
$dsn = "pgsql:host=localhost;dbname=lsaarinen";
$user = "db_lsaarinen";
$pass = getenv('DB_PASSWORD');
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

try {
$yht = new PDO($dsn, $user, $pass, $options);
if (!$yht) echo $e->getMessage(); 


echo"<br><hr>";



$stmt = $yht->query("SELECT nimi,ohjaaja,genre,vuosi,miespääosa,naispääosa,ikäraja,kesto FROM elokuvat"); 
   while ($rivi = $stmt->fetch()) {
 
    echo " <span><br></span>" ;
    echo " <span><table></span>" ;
    echo " <span><tr></span>" ;
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
 catch (PDOException $e) { 
     echo $e->getMessage(); die();
 }
include 'ala.php';
?>