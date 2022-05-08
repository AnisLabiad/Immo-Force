<?php

var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", ""); 
// hum un require database.php serait mieux non ?
$homeID = $_POST['id_logement'];

$req  = $bdd->prepare("SELECT * FROM immo WHERE ID=:gameID"); 

$req->bindValue('id_logement', $homeID, PDO::PARAM_INT); 

$req->execute(); 

$home = $req->fetchAll(PDO::FETCH_ASSOC); 

$req->closeCursor(); 

var_dump($home);
var_dump($home['titre']);

?>

<form action="editValid.php" method="post">
    <input type="text" name="titre" value="<?= $home[0]['titre'] ?>">
    <input hidden type="text" name="id_logement" value="<?= $home[0]['ID'] ?>">
<button type="submit">Edit</button>
</form>