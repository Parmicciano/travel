<?php 
include('../../config.php');
 $actual_link = "$_SERVER[REQUEST_URI]";
$pays= str_replace("/travel/", "", $actual_link);
$pays= str_replace("destination/voyage/", "", $pays);
$pays= str_replace(".php", "", $pays);
?>

<html>

<head>
<?php include('../../head.php'); ?>

</head>

<body>
<?php   include('../../nav.php'); ?>
<br><br> 
<?php 
$search = $bdd->query("SELECT * FROM country WHERE pays = '$pays'");
 
while ($results = $search->fetch()) { 
  
echo '<h1 class="text-xl mx-16"><a href="../../search.php?search=';
echo $results["pays"];
echo '"';
 echo $results["pays"];
 echo "</a>";
 echo "</h1>";
 echo "<br><br>";
 echo '<img class="m-auto" width="72%" height="auto" src="';
 
 echo $results["image"];
 echo '"';
 echo ' alt="';
echo $results['pays'];
 echo '">';
 echo '</div>';
 echo ' <div class="m-16">';
echo $results["content"];
echo "</div>";
echo ' <div class="m-16">';
echo $results["weather"];
echo "</div>";
}

$trip = $bdd->query("SELECT * FROM travel WHERE pays ='$pays' ORDER BY Qualtyprice DESC");
?>

<h2 class="text-2xl mx-16 text-center">Voici les meilleures offres du moment pour partir  (<?=$pays?>)</h2>
<br><?php
while ($everytrip = $trip->fetch()) { 

  include('../../annonce.php');
}
?>
</body>


</html>