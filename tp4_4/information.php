<?php include("header.php") ?>
            <?php 
                    if(empty($_POST["fournisseur"])) {
                        ?>
                        <script type="text/javascript">
                            alert('Le choix du fournisseur est obligatoire');
                            window.location.replace("fournisseur.php");
                        </script>
                <?php
                    }else{
                 ?>
                    <div class="column side">
				        <h2>Fournisseur</h2>
                        <input type="text" readonly="true" value="<?php echo $_POST["fournisseur"] ?>">
			        </div>
                 <?php
                    }
                ?>
            <div class="column middle">
				<h2>Formulaire</h2>
				<form action="paiement.php" method="post"  onsubmit="return mfValidation(this)">
					<fieldset>
						<legend> Information  : ? </legend>
						<input type="radio" name="type" value="perso" onclick="personnel();"> Personnel&nbsp;&nbsp;
						<input type="radio" name="type" value="prof" checked onclick="professionel();"> Professionel<br>
						<br>
						<div id="tva">
						N° TVA:<br>
							<input type="text" name="tva"><br><br>
						</div>
						Prénom :<br>
							<input type="text" name="firstname"><br><br>
						Nom :<br>
							<input type="text" name="lastname">
						<br><br>
						<div id="gender">
						</div>
						Email :<br>
							<input type="text" name="mail">
						<br><br>
						N° Téléphone :<br>
							<input type="text" name="phone">
						<br><br>
						Adresse :<br>
							<input type="textarea" name="adresse">
						<br><br>
						Provinces :<br>
							<select name="region" id="region" onchange="ville()">
							  <option value="">....</option>
							  <option value="f2">Hainaut</option>
							  <option value="f3">Brabant Wallon</option>
							  <option value="f4">Liège</option>
							  <option value="f4">Namur</option>
							</select>
						<br><br>
						Ville :<br>
							<div id="ville">
								<input type="text" name="Ville">
							</div>
						<br><br>
						Code postale :<br>
							<input type="text" name="code">
						<br><br>
                        <input type="hidden" value="<?php echo $_POST["fournisseur"]?>" name="fournisseur" >
						<input type="submit"><input type="reset">
					</fieldset>
				</form>
			</div>

<?php include('footer.php') ?>