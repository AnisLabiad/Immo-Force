<?php

// var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", "");
if (!empty($_POST['id_logement'])) {


    $homeID = $_POST['id_logement']; // vérifier type
    // avoir la bdd ($bdd) forcement... require...
    $req = "DELETE FROM immo WHERE ID= :id";
    $stmt = $bdd->prepare($req); // ou ecrire dans prepare 
    $stmt->bindValue(":id", $homeID, PDO::PARAM_INT);
    $result = $stmt->execute(); // si good redirection !
    $stmt->closeCursor();
    
    
    if ($result) {
        header("Location: test.php");
    }
}