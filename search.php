<!DOCTYPE html>
<html lang="fr">
<head>
<?php include('head.php'); ?>
<title>Meilleurs Voyages</title>
<meta name="description" content="Quels sont les meilleurs voyage au départ de Paris pour pas cher ?">
</head>
<?php include('nav.php') ?>
<h1 class="ml-12 text-lg">Découvrez la Terre au meilleur prix</h1>
<?php include('searchbar.php'); ?>


      <?php include('config.php');
      $search = $_GET["search"];
      $trip = $bdd->query("SELECT * FROM travel WHERE pays ='$search' OR destination = '$search' OR nomhotel='$search'");
      echo"<br><br>";
while ($everytrip = $trip->fetch()) { 

        include('annonce.php');
      }
      

if(!isset($search) || $search = "") {
  $trip = $bdd->query("SELECT * FROM travel ORDER BY prix ASC");
  echo"<br><br>";
  while ($everytrip = $trip->fetch()) { 
    
          include('annonce.php');
        }
} 

$search = $_GET["search"];
$unfound = $bdd->query("SELECT COUNT(*) FROM travel WHERE pays ='$search' OR destination = '$search' OR nomhotel='$search'")->fetchColumn();

if($unfound == 0) {

  echo " <div class='ml-12 text-xl'> Nous n'avons pas trouvé ce que vous cherchez <br><br>"; 
  echo "<h2>Vous pouvez être intéressé par :</h2></div>";
  $trip = $bdd->query("SELECT * FROM travel ORDER BY RAND()");
  echo"<br><br>";
  while ($everytrip = $trip->fetch()) { 
    
          include('annonce.php');
        }
}

?>

<h2>