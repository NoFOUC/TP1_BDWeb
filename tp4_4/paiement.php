<?php include("header.php") ?>

            <?php if(empty($_POST["tva"]) || empty($_POST["firstname"]) || 
                empty($_POST["lastname"]) || empty($_POST["mail"]) || empty($_POST["phone"]) || empty($_POST["adresse"]) || 
                empty($_POST["region"]) || empty($_POST["ville2"]) || empty($_POST["code"])){
                    if(empty($_POST["tva"])){
                        echo "tva vide";
                    }
                    if(empty($_POST["firstname"])){
                        echo "prenom vide";
                    }
                    if(empty($_POST["lastname"])){
                        echo "nom vide";
                    }
                    if(empty($_POST["mail"])){
                        echo  "mail vide";
                    }
                    if(empty($_POST["phone"])){
                        echo "phone  vide";
                    }
                    if(empty($_POST["adresse"])){
                        echo "adresse vide";
                    }
                    if(empty($_POST["region"])){
                        echo "region vide";
                    }

                    ?>
                    <script type="text/javascript">
                        alert('Veuillez remplir tous les champs');
                        window.location.replace("fournisseur.php");
                    </script>
            <?php
            }else{
                ?>

                    <div class="column side">
				        <h2>Fournisseur</h2>
                        <input type="text" readonly="true" value="<?php echo $_POST["fournisseur"] ?>">
                        <h2>Information</h2>
                        <div id="tva">
						N° TVA:<br>
							<input type="text" readonly="true" value="<?php echo $_POST["tva"] ?>" name="tva"><br><br>
						</div>
						Prénom :<br>
							<input type="text" readonly="true" value="<?php echo $_POST["firstname"] ?>" name="firstname"><br><br>
						Nom :<br>
							<input type="text" readonly="true" value="<?php echo $_POST["lastname"] ?>" name="lastname">
						<br><br>
						</div>
						Email :<br>
							<input type="text" readonly="true" value="<?php echo $_POST["mail"] ?>" name="mail">
						<br><br>
						N° Téléphone :<br>
							<input type="text" readonly="true" value="<?php echo $_POST["phone"] ?>" name="phone">
						<br><br>
						Adresse :<br>
							<input type="textarea" readonly="true" value="<?php echo $_POST["adresse"] ?>" name="adresse">
						<br><br>
						Provinces :<br>
							<input type="text" readonly="true" value="<?php echo $_POST["region"] ?>" name="region">
						<br><br>
						Ville :<br>
							<div id="ville">
								<input type="text" readonly="true" value="<?php echo $_POST["ville2"] ?>" name="Ville2">
							</div>
						<br><br>
						Code postale :<br>
							<input type="text" readonly="true" value="<?php echo $_POST["code"] ?>" name="code">
						<br><br>
			        </div>
                <?php
            }
             ?>


            <div class="column side2">
				<h2>Paiement</h2>
				<form action="fournisseur.php" method="post">
					<fieldset>
						<legend> Paiement  : ? </legend>
						
						Propriétaire :<br>
							<input type="text" name="owner" style="width: 140px;">
							CVV :
							<input type="text" name="cvv" id="cvv"  id="cvv" style="width: 41px;"><br>
							Numéro de carte :<br>
							<input type="text" name ="num_carte">
							Date expiration :<br>
							<select name="month" style="width: 50px;">
								<option></option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select name="year">
							<select style="width: 50px;">
								<option></option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
							</select>
						<br><br>
							<input type="submit"><input type="reset">
					</fieldset>
				</form>
			</div>

<?php include('footer.php') ?>