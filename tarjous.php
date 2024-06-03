<?php
include 'yla.php';

?>

<html><body>
    
       <p>Jätä tarjouspyyntö lasten tai aikuisten elokuvaelämyspaketista</p><br><br>
  

<form action="" method="POST">
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




    Viesti<br>
    <textarea rows=5 cols=60 name=mess></textarea>
        <br><br>
        <input type=submit value="Lähetä">
</form>

    </body></html>



<?php
include 'ala.php'; 