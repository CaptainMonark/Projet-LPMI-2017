<?php

include ('src/connexion.php');

$message='';
if(isset($_POST['mail']))
{
	$result = $link->query("SELECT * FROM utilisateur WHERE mail = '". $_POST['mail']."'");		
	$user = $result->fetch_object();
	if(isset($user) && $_POST['password'] == $user->mdp)
	{	 
		$message = "Félicitation ".$user->nom." ".$user->prenom.", vous êtes connecté !";
		$_SESSION['user'] = $user;
		header ("Location: ?rub=accueil#no-js-slider-1" );	
	}
	else
	{
		$message = '<p>Identifiants inconnus</p>';
	}  
}	       
echo $message;
echo '<form method="post" action="?rub=login">
<fieldset>
<legend>Connexion</legend>
<p>
<label class="labelLogin" for="mail">Adresse email :</label><input name="mail" type="text" required id="mail" /><br/>
<label class="labelLogin" for="password">Mot de Passe :</label><input type="password" name="password" required id="password" />
</p>
</fieldset>
<p><input type="submit" value="Connexion" /></p></form>
<a href="?rub=inscription">Pas encore inscrit ?</a>
</div>';
?>