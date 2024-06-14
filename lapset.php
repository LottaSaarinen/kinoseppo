<?php

include 'yla.php';
?>

<main>
    <h1>Lasten elokuvat</h1>
    <table>
        <thead>
            <tr>
                <th>Kuva</th>
                <th>Nimi</th>
                <th>Ohjaaja</th>
                <th>Genre</th>
                <th>Vuosi</th>
                <th>Miespääosa</th>
                <th>Naispääosa</th>
                <th>Ikäraja</th>
                <th>Kesto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><img src="https://upload.wikimedia.org/wikipedia/en/1/13/Toy_Story.jpg" class="leffa__kuvat"></td>
				<td>Spaceman</td>
                <td>Toy Story</td>
                <td>John Lasseter</td>
                <td>Lastenelokuva</td>
                <td>1995</td>
                <td>Tom Hanks (Woody)</td>
                <td>Annie Potts (Bo Peep)</td>
                <td>0</td>
                <td>81</td>
                </tr>
            <tr>
                <td>Muumipeikko ja pyrstötähti</td>
                <td>Maria Lindberg ja Xavier Picard</td>
                <td>Lastenelokuva</td>
                <td>2010</td>
                <td>Risto Kaskilahti (Muumipappa)</td>
                <td>Vuokko Hovatta (Muumimamma)</td>
                <td>0</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Finding Nemo</td>
                <td>Andrew Stanton</td>
                <td>Lastenelokuva</td>
                <td>2003</td>
                <td>Albert Brooks (Marlin)</td>
                <td>Ellen DeGeneres (Dory)</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Shrek</td>
                <td>Andrew Adamson ja Vicky Jenson</td>
                <td>Lastenelokuva</td>
                <td>2001</td>
                <td>Mike Myers (Shrek)</td>
                <td>Cameron Diaz (Prinsessa Fiona)</td>
                <td>13</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Mulan</td>
                <td>Tony Bancroft ja Barry Cook</td>
                <td>Lastenelokuva</td>
                <td>1998</td>
                <td>Eddie Murphy (Mushu)</td>
                <td>Ming-Na Wen (Mulan)</td>
                <td>0</td>
                <td>88</td>
            </tr>
            <tr>
                <td>The Lion King</td>
                <td>Roger Allers ja Rob Minkoff</td>
                <td>Lastenelokuva</td>
                <td>1994</td>
                <td>Matthew Broderick (Simba)</td>
                <td>Moira Kelly (Nala)</td>
                <td>0</td>
                <td>88</td>
            </tr>
            <tr>
                <td>Frozen</td>
                <td>Chris Buck ja Jennifer Lee</td>
                <td>Lastenelokuva</td>
                <td>2013</td>
                <td>Jonathan Groff (Kristoff)</td>
                <td>Kristen Bell (Anna)</td>
                <td>13</td>
                <td>102</td>
            </tr>
            <tr>
                <td>Despicable Me</td>
                <td>Pierre Coffin ja Chris Renaud</td>
                <td>Lastenelokuva</td>
                <td>2010</td>
                <td>Steve Carell (Gru)</td>
                <td>Julie Andrews (Marlena)</td>
                <td>13</td>
                <td>95</td>
            </tr>
            <tr>
                <td>Moana</td>
                <td>Ron Clements ja John Musker</td>
                <td>Lastenelokuva</td>
                <td>2016</td>
                <td>Dwayne Johnson (Maui)</td>
                <td>Auli'i Cravalho (Moana)</td>
                <td>13</td>
                <td>107</td>
            </tr>
            <tr>
                <td>Up</td>
                <td>Pete Docter ja Bob Peterson</td>
                <td>Lastenelokuva</td>
                <td>2009</td>
                <td>Edward Asner (Carl Fredricksen)</td>
                <td>Jordan Nagai (Russell)</td>
                <td>13</td>
                <td>96</td>
            </tr>
            <tr>
                <td>Hercules</td>
                <td>Ron Clements ja John Musker</td>
                <td>Lastenelokuva</td>
                <td>1997</td>
                <td>Tate Donovan (Hercules)</td>
                <td>Susan Egan (Megara)</td>
                <td>0</td>
                <td>93</td>
            </tr>
        </tbody>
    </table>
</main>
<?php/*
include 'yla.php';



echo "<br><br><br>";

$dsn = "pgsql:host=localhost;dbname=lsaarinen";
$user = "db_lsaarinen";
$pass = getenv('DB_PASSWORD');
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

try {
    $yht= new PDO($dsn, $user, $pass, $options);
    if (!$yht) echo $e->getmessage();
   
     
    $stmt = $yht->query("SELECT nimi,ohjaaja,vuosi,miespääosa,naispääosa,ikäraja,kesto FROM elokuvat where genre like '%Lastenelokuva%' order by nimi asc"); 
   while ($rivi = $stmt->fetch()) {
 

    echo " <div><table></div>" ;
    echo "   <div><th> Nimi</th></div>" ;
    echo "   <div><th> Ohjaaja</th></div>" ;
     echo "  <div><th> Vuosi</th></div>" ;
      echo "  <div><th> Miespääosa</th></div>" ;
      echo "  <div><th> Naispääosa</th></div>" ;
      echo " <div> <th> Ikäraja</th></div>" ;
      echo " <div> <th> Kesto</th></div>" ;
      echo "<br>" ;
      echo "<tr>" ;

      echo " <div> <td>$rivi[nimi]</td></div>" ;
      echo " <div> <td>$rivi[ohjaaja]</td></div>" ;
      echo " <div> <td>$rivi[vuosi]</td></div>" ;
      echo " <div> <td>$rivi[miespääosa]</td></div>" ;
      echo "<div> <td>$rivi[naispääosa]</td></div>" ;
      echo "<div><td>$rivi[ikäraja]</td></div>" ;
      echo "<div><td>$rivi[kesto]</td></div>" ;
   
      echo "<div></tr></div>" ;
      echo "<div></table> </div>" ;

   
     } 
 
 }
catch (PDOException $e)
 {
    echo $e->getMessage();
   
}
include "ala.php";

    ?>
