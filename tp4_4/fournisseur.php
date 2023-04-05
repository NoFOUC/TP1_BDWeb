<?php include("header.php") ?>

            <div class="column side">
				<h2>Fournisseur</h2>
				<form action="information.php" method="post">
					<fieldset>
						<legend> Fournisseur : ? </legend>
						<select name="fournisseur">
						  <option value="Fournisseur 1">Fournisseur 1</option>
						  <option value="Fournisseur 2">Fournisseur 2</option>
						  <option value="Fournisseur 3">Fournisseur 3</option>
						  <option value="Fournisseur 4">Fournisseur 4</option>
						</select>
                        <br><br>
						<input type="submit"><input type="reset">
					</fieldset>
				</form>
			</div>

<?php include("footer.php") ?>