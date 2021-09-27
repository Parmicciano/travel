<?php 
   
   $id = $everytrip["hostid"];
   $destination = $everytrip['nomhotel'];
   $image = $everytrip['img'];
   $nights = $everytrip['nuits'];
   $prix = $everytrip['prix'];
   $descr = $everytrip['descriptions'];
   $descr = strip_tags($descr);
   $descr  = str_replace('. ', '. <br>', $descr);
 $host = $everytrip["host"];
 $lelien = $everytrip["lurl"];
 $insteadof =$everytrip["insteadof"];
 $country = $everytrip["pays"];
   $emoji = $bdd->query("SELECT * FROM travelhost WHERE host ='$host'");
   while ($lemoji = $emoji->fetch()) {     
    $traveltype = $lemoji["emoji"];
   }
$doc = new DOMDocument();
$doc->loadHTML($image);
$xpath = new DOMXPath($doc);
$src = $xpath->evaluate("string(//img/@src)"); # "/images/image.jpg"
$lien = "<a target='_blank' href=".$lelien;
$lien = $lien.'?source=Discovearths rel="noopener"><u>Voir plus</u></a>';

     
 $issetpays = $bdd->query("SELECT COUNT(*) FROM country WHERE pays ='$country'")->fetchColumn();
 if($issetpays == 1) {
 $pays = $bdd->query("SELECT * FROM country WHERE pays = '$country'");

 while ($ipays = $pays->fetch()) {    
  $fichepays =  $ipays["pays"];
  $fichepays = "<u><a href='" . $ipays["url"] . "'>$fichepays</a></u>";

 }
}

if($insteadof == 0  ) {$insteadof = "<p style='display:none'> </p>";}
if ($insteadof == $prix) {$insteadof = "<p style='display:none'> </p>";}
 echo "
 
 <figure class='md:flex  rounded-xl p-8 md:p-0'>

<img loading='lazy' id='imgla' class='w-64 h-auto md:w-96 md:h-auto md:rounded-sm items-start mx-12' src='$src ' alt=' $destination ' width='500' height='auto'>
 <div class='pt-6 md:p-8 text-center md:text-left space-y-4'>
   <blockquote>
     <p class='text-3xl font-semibold'>
      $destination  $traveltype
     </p>
   </blockquote>
   <figcaption class='font-medium'>
     <div class='text-grey-500 text-2xl'>
        $nights  nuits
     </div>";


if($issetpays == 1) {echo $fichepays;}
if($issetpays == 0) {echo $country;}
     echo "
      
     <div class='text-gray-500'>
     À partir de  <span class='text-2xl'> $prix € </span><span class='line-through'> $insteadof </span> /pers. <span class='text-2xl'> 🔥  🔥  🔥 </span>
     </div>
     <br>
     <p class='text-gray-500'>
    $lien
    </p>
     </figcaptiow>
     </div>
   </figure>
<br>
";
?>