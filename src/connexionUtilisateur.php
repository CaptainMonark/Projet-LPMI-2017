<?php

include ('connexion.php');
$message='';
if(isset($_POST['addrmail']))
{
	$result = $link->query("SELECT * FROM utilisateur WHERE mail = '". $_POST['addrmail']."'");		
	$user = $result->fetch_object();
	if(isset($user) && $_POST['password'] == $user->mdp)
	{	 
		$message = "Félicitation ".$user->nom." ".$user->prenom.", vous êtes connecté !";
		$_SESSION['user'] = $user;
		header ("Location: ../?rub=accueil#no-js-slider-1?msg=1" );	
	}
	else
	{
		$message = '<p>Identifiants inconnus</p>';
    }  
    echo $message;
}	       


?>