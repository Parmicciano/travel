<?php 
try {
$bdd = new PDO('mysql:host=db5002332269.hosting-data.io;dbname=dbs1874295;charset=utf8', 'dbu331872','Cholet44$$100');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>