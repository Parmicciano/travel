<?php 
include('config.php');


?>


<!DOCTYPE html>
<html lang="fr">


<head>

<meta name="description" content="Comment voyager dans le monde entier pour pas cher ?">
  <title>Discovearths</title>

    <?php include('head.php'); ?>
 
  <style>
    input {
      width: 210px !important;

    }

    svg {

      float: right !important;
      margin-left: 12px !important;
    }

    #fox {

      margin-left: 25px !important;
      margin-right: 25px !important;
    }
  </style>
</head>

<body class="mx-3">
  <?php include('nav.php'); ?>


<h1 class="ml-12 text-lg">Parcourir la Terre</h1>
  
<?php include('searchbar.php'); ?>
 
    <br><br>
<h2 class="ml-12 text-xl">Les meilleurs voyages du moment</h2>

  <br><br>

  
  <?php
  $trip = $bdd->query('SELECT * FROM travel ORDER BY Qualtyprice DESC LIMIT 5');

while ($everytrip = $trip->fetch()) {  
  include('annonce.php');
echo "<br>";

}
?>
    <?php
      
      if(isset($_GET['button1'])) {
        $trip = $bdd->query('SELECT * FROM travel ORDER BY Qualtyprice DESC LIMIT 5,10');

        while ($everytrip = $trip->fetch()) {  
          echo "<div id='moresults'>";
          include('annonce.php');
          echo "</div>";
        echo "<br>";
      }}

  ?>

     <?php 
     if(!isset($_GET["button1"])) {
       echo' 
  <form method="get" action="#moresults">
      <input type="submit" name="button1" class="mx-12 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              value="Voir plus de voyages"/>
        
   
  </form>
'; }
if(isset($_GET["button1"])) {
  echo' 
<form method="get" action="search.php">
 <input type="submit" name="button1" class="mx-12 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
         value="Voir tout les voyages"/>
   

</form>
'; }
?>

</div>
</div>



<br><br>
<?php include('emoji.php'); ?>

</body>

</html>