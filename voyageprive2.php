<?php
include ('config.php');
$voyages = $bdd->query('SELECT hostid FROM travel');
$entier = 0;
while ($lesvoyages = $voyages->fetch())
{
    $entier = $entier + 1;
    $id = $lesvoyages["hostid"];

    $voyageprivejsonurl = "https://www.voyage-prive.com/data/sale/" . $id;
    $voyagepriveid = file_get_contents($voyageprivejsonurl);
    $jsondecoded = json_decode($voyagepriveid, true);
    echo '<br><br><hr>';
    echo $voyageprivejsonurl;
    echo '<br>';

    foreach ($jsondecoded["paragraphs"] as $content) 
{
  $contenu =  $content["content"];
  $contenu = str_replace("'", "", $contenu); 
  $contenu = str_replace('"', "a", $contenu); 
  
//  $req = $bdd->prepare("INSERT into travel descriptions = '$contenu' WHERE hostid =" . $id);
 // $req->execute(); 
 $req = $bdd->prepare('UPDATE travel SET descriptions = :de WHERE hostid = :hostide');
 $req->execute(array(
     'de' => $contenu,
     'hostide' => $id
     ));

}






    $i = 0;
    foreach ($jsondecoded["offerBlocksHash"]["1"]['header_summary']["best_sale_price"] as $nuits) if ($i < 1)
    {
        $i = $i + 1;
        if (isset($nuits["real_price"]))
        {
            $req = $bdd->prepare("SELECT * FROM travel WHERE hostid =" . $id);
            $req->execute();
            while ($rapportk = $req->fetch()) {
            
            
                 $prix = $rapportk["prix"];
                 $vraiprix = $rapportk["insteadof"];
            
           
                $lerapportqualite = ($vraiprix) / $prix * 100;
            
                $req = $bdd->prepare("UPDATE travel set Qualtyprice = " . $lerapportqualite . " WHERE hostid =" . $id);
                $req->execute(); //rapport qualite
            
            
     
            
            
            
            
            
            
            
            }
            echo "prix avec transport :";
            print_r($nuits["price_promo"]);
            echo '<br>';
            echo "prix original :";
            print_r($nuits["real_price"]);
            echo '<br>';
            echo "nombre de nuits :";
            print_r($nuits["nights"]);
            $nights = $nuits["nights"];
            $realprice = $nuits["real_price"];
            $promo = $nuits["price_promo"];
            echo '<br>🛩️🛩️🛩️🛩️🛩️🛩️🛩️🛩️🛩️🛩️🛩️';
            $req = $bdd->prepare("UPDATE travel set prix = " . $promo . " WHERE hostid = " . $id);
            $req->execute();
            $req = $bdd->prepare("UPDATE travel set insteadof = " . $realprice . " WHERE hostid = " . $id);
            $req->execute();
            $req = $bdd->prepare("UPDATE travel set nuits = " . $nights . " WHERE hostid = " . $id);
            $req->execute();

        }
    }
}
echo $entier;

$fantom = $bdd->query('SELECT nuits FROM travel');
while ($lesfantom = $fantom->fetch())
{
    $zero = $lesfantom["nuits"];

    if ($zero == 0)
    {

        $req = $bdd->prepare("DELETE FROM travel WHERE nuits=0");
                    $req->execute();
                 }
        }  
        
        foreach ($jsondecoded["saleHash"] as $nomhotel) {
            var_dump($nomhotel);
          //  echo $nomhotel["name"];

}


























    
     