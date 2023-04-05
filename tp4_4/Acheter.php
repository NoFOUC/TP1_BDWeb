<?php 
    include("header.php");
    $Id_article = $_GET['chkid'];
?>

<form action="ConfirmeAchat.php" method="POST">
    Votre Id du client : <input  type="text" name="Id_client" /><br>
    L'Id de votre article choisi : <input type="text" name="Id_article" value="<?php echo $Id_article; ?>" readonly><br>
    <input type="submit" value="Confirmer votre achat"/>
</form>

<?php include("footer.php"); ?>