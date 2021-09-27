<?php


include('config.php');
include('simple_html_dom.php');
$m = date("m");
$y = date("y");

$json = file_get_contents('https://www.promovacances.com/api/ajax/search?destinationZones=2020&themespace=sejour-voyage&countryId=199&departureCityId=1188&departureDate=30/04/2021&flexi=120&pageNumber=1');
$data = json_decode($json, true);

foreach($data["items"] as $c){
  var_dump( $c["offerId"]);

echo $b;
echo "<br>";
echo $prix . "----->". "$image" . "$nuits" . "$lurle";


}
if (1 == 0) {
$Duplikat = $bdd->query("SELECT COUNT(*) FROM travel WHERE lurl = '$lurle'")->fetchColumn();
 if ($Duplikat < 1) {
    $host = "P";

    $req = $bdd->prepare('INSERT INTO travel(prix, nomhotel, pays, destination, nuits, host, hostid, img, lurl) VALUES(:prix, :nomhotel, :pays, :destination, :nuit, :host, :hostid, :images, :lurl)');
    $req->execute(array(
        'prix' => $prix,
        'nomhotel' => $nomhotel,
       'pays' => $pays,
       'destination' => $ville,
       'nuit' => $nuits,
       'host' => $host,
       'hostid' => $parselink["fragment"],
       'images' => $image,
       'lurl' => $lurle
      ));






    }}


?>