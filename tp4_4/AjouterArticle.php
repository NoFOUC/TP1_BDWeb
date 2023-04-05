<?php include('header.php'); ?>
<?php
    include("connexion.php");
    $Nom = $_POST["Nom"];
    $Prix =$_POST["Prix"];
    $Details= $_POST["Details"];
    $nom_photo_origine= $_FILES['photo']['name'];
    $nom_photo_server = $_FILES['photo']['tmp_name'];
    $nom_destination = "./imagesArticles/$nom_photo_origine";
    move_uploaded_file($nom_photo_server, $nom_destination);
    try{
        $sql = "INSERT INTO article(Id_article, Nom, Prix,Details,photo) VALUES (NULL,'$Nom',$Prix,'$Details', '$nom_destination')";
        $Resultat = $base->exec($sql);
        echo "Un article a bien été ajouté, son ID est : <h3>".$base->lastInsertId();
    } catch(Exception $e){
        echo "Erreur : ".$e->getMessage();
    }
?>
<?php include('footer.php'); ?>