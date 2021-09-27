<?php


include('config.php');
include('simple_html_dom.php');
$m = date("m");
$y = date("y");
$html = file_get_html("https://www.promovacances.com/idees-vacances/partir/vacances-automne/");
//$html = file_get_html('https://www.promovacances.com/idees-vacances/partir/vacances-ete/');
foreach($html->find('ul.as-GoodDeals-list li a')as $theelement){
        
    
 echo "<script>console.log('$theelement')</script>";

 preg_match('/^<a.*?href=(["\'])(.*?)\1.*$/', $theelement, $href);

 $lien = 'https://www.promovacances.com' .$href[2];
echo "<br>";
echo $lien;
echo "<br>";
$parselink = parse_url($lien);
if(isset($parselink["fragment"])) {
$thejson = "https://www.promovacances.com/v2/ajax/datalayer/ficheproduit/?offerId=" . $parselink["fragment"];
echo $thejson;

$promovacjson = file_get_contents($thejson);
$jsonuncodepromo = json_decode($promovacjson, true);
foreach($jsonuncodepromo[0]["produitDestination"] as $a){
    echo "<br>";
    $ville         =   $a["produitVille"];
    $pays         =   $a["produitPays"];
    echo $ville . $pays;
}
foreach($jsonuncodepromo as $b){
$image = $b["imageProduit"];
$image = "<img src='$image' alt='$ville'>";
$prix = $b["produitPrixAppel"];
$lurle = $b["urlProduit"];
$length = $b["produitDuree"];
preg_match_all('!\d+!', $length, $matches);
$nuits  = $matches[0][1];
$etoile = $b["produitEtoiles"];
$pension = $b["produitPension"];
$nomhotel = $b["produitLogement"];
$nomhotel = $nomhotel ." - "."$etoile"."*"." - "."$pension";
echo "<br>";
echo $prix . "----->". "$image" . "$nuits" . "$lurle";


}
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











    }
 }
echo '<br><hr>';




}








$html2 = file_get_html('https://www.promovacances.com/idees-vacances/partir/vacances-ete/');
foreach($html2->find('ul.as-GoodDeals-list li a')as $theelement){
        
    
    echo "<script>console.log('$theelement')</script>";
   
    preg_match('/^<a.*?href=(["\'])(.*?)\1.*$/', $theelement, $href);
   
    $lien = 'https://www.promovacances.com' .$href[2];
   echo "<br>";
   echo $lien;
   echo "<br>";
   $parselink = parse_url($lien);
   if(isset($parselink["fragment"])) {
   $thejson = "https://www.promovacances.com/v2/ajax/datalayer/ficheproduit/?offerId=" . $parselink["fragment"];
   echo $thejson;
   
   $promovacjson = file_get_contents($thejson);
   $jsonuncodepromo = json_decode($promovacjson, true);
   foreach($jsonuncodepromo[0]["produitDestination"] as $a){
       echo "<br>";
       $ville         =   $a["produitVille"];
       $pays         =   $a["produitPays"];
       echo $ville . $pays;
   }
   foreach($jsonuncodepromo as $b){
   $image = $b["imageProduit"];
   $image = "<img src='$image' alt='$ville'>";
   $prix = $b["produitPrixAppel"];
   $lurle = $b["urlProduit"];
   $length = $b["produitDuree"];
   preg_match_all('!\d+!', $length, $matches);
   $nuits  = $matches[0][1];
   $etoile = $b["produitEtoiles"];
   $pension = $b["produitPension"];
   $nomhotel = $b["produitLogement"];
   $nomhotel = $nomhotel ." - "."$etoile"."*"." - "."$pension";
   echo "<br>";
   echo $prix . "----->". "$image" . "$nuits" . "$lurle";
   
   
   }
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
   
   
   
   
   
   
   
   
   
   
   
       }
    }
   echo '<br><hr>';
   
   
   
   
   }


















$html3 = file_get_html('https://www.promovacances.com/idees-vacances/partir/vacances-hiver/');
foreach($html3->find('ul.as-GoodDeals-list li a')as $theelement){
        
    
    echo "<script>console.log('$theelement')</script>";
   
    preg_match('/^<a.*?href=(["\'])(.*?)\1.*$/', $theelement, $href);
   
    $lien = 'https://www.promovacances.com' .$href[2];
   echo "<br>";
   echo $lien;
   echo "<br>";
   $parselink = parse_url($lien);
   if(isset($parselink["fragment"])) {
   $thejson = "https://www.promovacances.com/v2/ajax/datalayer/ficheproduit/?offerId=" . $parselink["fragment"];
   echo $thejson;
   
   $promovacjson = file_get_contents($thejson);
   $jsonuncodepromo = json_decode($promovacjson, true);
   foreach($jsonuncodepromo[0]["produitDestination"] as $a){
       echo "<br>";
       $ville         =   $a["produitVille"];
       $pays         =   $a["produitPays"];
       echo $ville . $pays;
   }
   foreach($jsonuncodepromo as $b){
   $image = $b["imageProduit"];
   $image = "<img src='$image' alt='$ville'>";
   $prix = $b["produitPrixAppel"];
   $lurle = $b["urlProduit"];
   $length = $b["produitDuree"];
   preg_match_all('!\d+!', $length, $matches);
   $nuits  = $matches[0][1];
   $etoile = $b["produitEtoiles"];
   $pension = $b["produitPension"];
   $nomhotel = $b["produitLogement"];
   $nomhotel = $nomhotel ." - "."$etoile"."*"." - "."$pension";
   echo "<br>";
   echo $prix . "----->". "$image" . "$nuits" . "$lurle";
   
   
   }
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
   
   
   
   
   
   
   
   
   
   
   
       }
    }
   echo '<br><hr>';
   
   
   
   
   }



















$html4 = file_get_html('https://www.promovacances.com/idees-vacances/partir/vacances-printemps/');
foreach($html4->find('ul.as-GoodDeals-list li a')as $theelement){
        
    
    echo "<script>console.log('$theelement')</script>";
   
    preg_match('/^<a.*?href=(["\'])(.*?)\1.*$/', $theelement, $href);
   
    $lien = 'https://www.promovacances.com' .$href[2];
   echo "<br>";
   echo $lien;
   echo "<br>";
   $parselink = parse_url($lien);
   if(isset($parselink["fragment"])) {
   $thejson = "https://www.promovacances.com/v2/ajax/datalayer/ficheproduit/?offerId=" . $parselink["fragment"];
   echo $thejson;
   
   $promovacjson = file_get_contents($thejson);
   $jsonuncodepromo = json_decode($promovacjson, true);
   foreach($jsonuncodepromo[0]["produitDestination"] as $a){
       echo "<br>";
       $ville         =   $a["produitVille"];
       $pays         =   $a["produitPays"];
       echo $ville . $pays;
   }
   foreach($jsonuncodepromo as $b){
   $image = $b["imageProduit"];
   $image = "<img src='$image' alt='$ville'>";
   $prix = $b["produitPrixAppel"];
   $lurle = $b["urlProduit"];
   $length = $b["produitDuree"];
   preg_match_all('!\d+!', $length, $matches);
   $nuits  = $matches[0][1];
   $etoile = $b["produitEtoiles"];
   $pension = $b["produitPension"];
   $nomhotel = $b["produitLogement"];
   $nomhotel = $nomhotel ." - "."$etoile"."*"." - "."$pension";
   echo "<br>";
   echo $prix . "----->". "$image" . "$nuits" . "$lurle";
   
   
   }
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
   
   
   
   
   
   
   
   
   
   
   
       }
    }
   echo '<br><hr>';
   
   
   
   
   }
?>
