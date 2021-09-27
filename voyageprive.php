<?php

include('config.php');
include('simple_html_dom.php');


$voyageprive = file_get_contents('https://www.voyage-prive.com/search/doAjaxSearch?culture=fr_FR&page=1&budget=true&sales_type=filtered&mgroup=0');
$jsonuncode = json_decode($voyageprive, true);

//print_r($jsonuncode);

$req = $bdd->prepare('DELETE FROM travel WHERE host = "V"');
$req->execute();

foreach($jsonuncode['sids'] as $id) {
    // print $starts['zipcode'];
     
 //print $id . '<br><hr>';

 foreach($jsonuncode['results']["$id"]['infrastructureList'] as $infrastructure){

    
  
    $pays = $infrastructure['country'];
    $zipcode = $infrastructure['zipcode'];
    $place = $infrastructure['name'];
    $address = $infrastructure['adress'];
    $city = $infrastructure['city'];
    $latitude = $infrastructure['latitude'];
    $region = $infrastructure['region'];
    $longitude = $infrastructure['longitude'];
    foreach($jsonuncode['results']["$id"] as $prix){






    



      $array = 0;
      $array = is_array($prix);
      if ($array == 0) {
      
        echo " - $zipcode";
        echo " - $place";
        echo '<br>';
        echo 'Prix:';
        echo $prix;
        echo '<br>';

         $voyagepriveurl = "https://www.voyage-prive.com/fiche-produit/details/".$id;
        echo $voyagepriveurl;
       

        
          $jsonuncodeid = json_decode($voyagepriveid, true);
        $htmlid = file_get_html($voyagepriveurl);


      $i=0;
        foreach($htmlid->find('img') as $image)if ($i < 2){
       $i = $i + 1;
       if ($i > 1) {
         echo $image;
        $limage = $image;
       

       }}
       

       
        $host = 'V';
     
      
        $Duplikat = $bdd->query("SELECT COUNT(*) FROM travel WHERE lurl = '$voyagepriveurl'")->fetchColumn();
      if (str_contains($limage, 'https')) {
          
       if ($Duplikat < 1) {
         $req = $bdd->prepare('INSERT INTO travel(prix, nomhotel, zipcode, pays, destination, host, hostid, img, lurl) VALUES(:prix, :nomhotel, :zipcode, :pays, :destination, :host, :hostid, :images, :lurl)');
         $req->execute(array(
             'prix' => $prix,
             'nomhotel' => $place,
             'zipcode' => $zipcode,
            'pays' => $pays,
            'destination' => $city,
            'host' => $host,
            'hostid' => $id,
            'images' => $limage,
            'lurl' => $voyagepriveurl
           ));
      
              }
               echo '<br>';
              echo "<br><hr>";      
              
        
      }
    }

  }
 }
}

   
 

       
 
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

</body>
</html>