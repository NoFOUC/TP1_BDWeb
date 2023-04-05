<?php include('header.php'); ?>
<?php
    include("connexion.php"); //connexion à la base de données
    $Nom = $_POST["Nom"]; //récupération des données encodées
    $Prenom =$_POST["Prenom"];
    $Email= $_POST["Email"];
    $Telephone = $_POST["Telephone"];
    $Adresse =$_POST["Adresse"];
    $TVA = $_POST["TVA"];
    $CartePaiement = $_POST["CartePaiement"];

    try{ //lancer la requête d’insertion dans la table client
        $sql = "INSERT INTO client(id, Nom, Prenom,Email,Telephone,Adresse, TVA, CartePaiment) VALUES(NULL,'$Nom','$Prenom','$Email','$Telephone','$Adresse','$TVA','$CartePaiement')";
        $Resultat = $base->exec($sql);
        echo "Un Client a bien été ajouté, son ID est : <h3>".$base->lastInsertId();
    }  catch(Exception $e){
        echo "Erreur : ".$e->getMessage();
    }
?>
<?php include('footer.php'); ?>