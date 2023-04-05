<?php
    include("header.php");
    include("connexion.php");
    $Id_article = $_POST["Id_article"];
    $Id_client =$_POST["Id_client"];
    $date = date("d/m/Y");
    try{
        $sql = "INSERT INTO facture(Id_client, Id_article , Date_commande) VALUES ('$Id_client', $Id_article,'$date')";
        $Resultat = $base->exec($sql);
        echo "L'achat a bien été réalisé";
    } catch(Exception $e){
        echo "Erreur : ".$e->getMessage();
    }
    include("footer.php");
?>