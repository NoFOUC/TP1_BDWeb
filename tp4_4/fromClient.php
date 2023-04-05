<?php include("header.php") ?>

<form action="AjouterClient.php" method="POST">
    Nom : <input type="text" name="Nom" />
    Prenom : <input type="text" name="Prenom"/>
    Email : <input type="text" name="Email"/>
    Telephone : <input type="text" name="Telephone"/>
    Adresse : <input type="text" name="Adresse"/>
    Numéro de TVA : <input type="text" name="TVA"/>
    Carte de paiement : <input type="text" name="CartePaiement"/>
    <input type= "submit" value=" Ajouter "/>
</form>

<?php include("footer.php") ?>