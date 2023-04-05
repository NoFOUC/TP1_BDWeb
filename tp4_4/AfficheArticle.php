<?php include("header.php") ?>

<?php
    include("connexion.php"); // connexion à la base de données
    $sql = "SELECT * FROM article"; // requête pour récupérer tous les articles
    $resultat=$base->query($sql);
    echo "le nombre d'articles dans la base de données est de : ".$resultat->rowCount().'</strong>'; // afficher le nombre d'articles
    echo "<br>";
    while($ligne=$resultat->fetch(PDO::FETCH_ASSOC)){ //dans une boucle on affiche article par article
        $Id_article=$ligne['Id_article'];
        $Nom=$ligne['Nom'];
        $Prix=$ligne['Prix'];
        $Details = $ligne['Details'];
        $photo=$ligne['photo'];
        echo "<h2>$Nom : </h2> <img src='$photo' width='250' height='240'><br>";
        echo "<h3>Prix : $Prix <br> Details : $Details <strong> <br><a href='Acheter.php?chkid=$Id_article'>Acheter</a></strong></h3><br/>";
        echo "<hr>";
    }
?>

<?php include("footer.php") ?>