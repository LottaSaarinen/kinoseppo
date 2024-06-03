<?php
include 'yla.php';

?>

<html><body>
    
       
    <h2>varaa liput</h2>

<form action="varaa.php" method="POST">
  <div>
    <label for="nimi">Nimi:</label>
    <input id="nimi" type="text" name="nimi">
    
  </div>
  <div>
    <label>Sähköposti:</label>
    <input type="text" name="email" >
  </div>
 
   
  <div>
    <label>Puhelinnumero:</label>
    <input type="password" name="salasana1">
    
  </div>




    Varauskalenteri? Kirjaudu sisään?Valmiiksi hinnoitellut elämyspaketit?<br>
    
        <input type=submit value="Lähetä">
</form>

    </body></html>



<?php
include 'ala.php'; 