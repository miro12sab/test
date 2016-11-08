<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=diak', 'root', 'admin') or die(print_r($bdd->errorInfo()));
$bdd->exec('SET NAMES utf8');
}
 
catch(Exeption $e){
die('Erreur:'.$e->getMessage());
}
 
$limit = $_GET['numero'];
 
$req = $bdd->query('SELECT * FROM message where etat=0');
while ($data = $req->fetch()) {
        echo '<a href="#"><h4>';
    echo $data['emetteur'];
        echo '</h4>';
		echo '<h5>';
		echo '&nbsp;&nbsp;&nbsp;';
    echo $data['message'];
        echo '</h5>';
		echo '<h6>';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp';
    echo $data['date'];
		echo '</h6></a><hr/>';
}
$req->closeCursor();
?>