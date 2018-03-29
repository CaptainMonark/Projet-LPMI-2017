
<div class="login">
	<div class="login-page">
		<div class="form">
		<form method="post" action="src/connexionUtilisateur.php" class="login-form">
			<?php
			if(isset($_SESSION["noAccess"]) && $_SESSION["noAccess"] == true)
			{ 
				echo "<div class='messageAuth'>Vous devez être connecté pour accéder à cette page</div><br />";
				$_SESSION["noAccess"] = false;
			} 
			?>
			<input type="text" placeholder="Adresse mail" name="addrmail" id="addrmail" required/>
			<input type="password" placeholder="Mot de passe" name="password" id='password' required/>
			<?php
			if(isset($_SESSION["wrongId"]) && $_SESSION["wrongId"] == true)
			{ 
				echo "<div class='messageAuth'>Identifiants inconnus</div><br />";
				$_SESSION["wrongId"] = false;
			} 
			?>
			<input class="button" type="submit" value="Connexion">
			<p class="message">Pas encore enregistrer ? <a href="?rub=inscription">Crée un compte</a></p>
		</form>
		</div>
	</div>
</div>