<?php include("header.php") ?>

<form action = "AjouterArticle.php" method = "POST" enctype="multipart/form-data">
    Nom : <input type="text" name="Nom" /><br>
    Prix : <input type="text" name="Prix" /><br>
    Details : <textarea name="Details"></textarea><br>
    Photo : <input type="file" name="photo"/><br>
    <input type= "submit" value=" Ajouter "/>
</form>

<?php include("footer.php") ?>