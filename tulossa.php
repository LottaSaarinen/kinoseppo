<?php
include 'yla.php';
?>
<html><body>
<form action= "tulossa.php" method="GET">
    
    <input type="submit"name ='tulossa' value="Tulossa olevat elokuvat">
</form>

</body></html>
<?php
if (isset($_GET['tulossa'])) {  
    header ("Location :https://www.elokuvauutiset.fi/site/ensi-illat/tulevat-ensi-illat");
    
    } 
/*

    $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://ott-details.p.rapidapi.com/advancedsearch?start_year=1970&end_year=2020&min_imdb=6&max_imdb=7.8&genre=action&language=english&type=movie&sort=latest&page=1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: ott-details.p.rapidapi.com",
		"x-rapidapi-key: 0437f21ac3msh111f0a71a26c861p1037ebjsn90d455cbb197"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}*/
?>
