<?php
include 'yla.php';
?>


<?php
$dsn = "mysql:host=localhost;" . "dbname={$_SERVER['DB_DATABASE']};" . "charset=utf8mb4";
$user = $_SERVER['DB_USERNAME'];
$pass = $_SERVER['DB_PASSWORD'];
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,];

try {
	$yht = new PDO($dsn, $user, $pass, $options);
   if (!$yht) {die ();}

   $stmt = $yht->query("SELECT idleffa, nimi, julkaisupvm, genre, ohjaaja, kuva, kesto FROM leffat");
   $leffat = $stmt->fetchAll(PDO::FETCH_ASSOC);


} catch (PDOException $e) { 
	echo $e->getMessage(); die();
}

?>



<main>
	<h1>Tulossa olevat elokuvat</h1>
	<table>
		<thead>
			<tr>
				<th>Kuva</th>
                <th>Elokuvan Nimi</th>
                <th>Julkaisupäivä</th>
                <th>Genre</th>
                <th>Ohjaaja</th>
                <th>Kesto</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($leffat as $leffa): ?>
			<tr>
				<td><img src="<?= htmlspecialchars($leffa['kuva']) ?>" alt="<?= htmlspecialchars($leffa['nimi']) ?>" class="leffa__kuvat"></td>
				<td><?= htmlspecialchars($leffa['nimi']) ?></td>
                    <td><?= htmlspecialchars($leffa['julkaisupvm']) ?></td>
                    <td><?= htmlspecialchars($leffa['genre']) ?></td>
                    <td><?= htmlspecialchars($leffa['ohjaaja']) ?></td>
                    <td><?= htmlspecialchars($leffa['kesto']) ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</main>

<?php
include 'ala.php';
?>






