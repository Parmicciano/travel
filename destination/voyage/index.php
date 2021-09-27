<?php 
echo $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include('../../config.php');
$search = $bdd->query("SELECT * FROM country");
 
while ($results = $search->fetch()) { 
$pays = $results["pays"];
echo $pays;
$myfile = fopen("$pays.php", "w") or die("Unable to open file!");
$txt = "<?php include('destination.php') ?>";
fwrite($myfile, $txt);
fclose($myfile);
echo "qjpiaiopqzjiopsqkopsqdopkqdzopjsqdopidfsnfdqopcjcdopdfsnfdsiodvsnvdsiodshndsopidsfdsopjdfso";
}
?>