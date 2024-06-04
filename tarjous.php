<?php
include 'yla.php';

?>
<html><body>
    
       <p>Jätä tarjouspyyntö lasten tai aikuisten elokuvaelämyspaketista</p><br><br>
  
<form action="pyynto.php" method="POST">
  <div><label for="nimi">Nimi:</label>
    <input id="nimi" type="text" name="nimi"></div>

  <div><label>Puhelinnumero:</label>
    <input type="text" name="puhelinnumero"></div>

    <div><label>Sähköposti:</label>
    <input type="text" name="email" ></div>
    Viesti: (Kerro toiveesi elokuvasta ja tarjoilusta, sekä mahdollisesta teemasta)<br>
    <textarea rows=5 cols=60 name="viesti"></textarea>
    <br><br><input type=submit value="Lähetä">
</form>
    </body></html>

<?php


include 'ala.php'; 
?>