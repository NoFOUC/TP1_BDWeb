<?php 
    try{
        $base = new PDO('mysql:host=localhost;dbname=tp_php','root','');
        echo "Connexion à la base de données réussie<br>";
    }
    catch  (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
?>