<?php
<<<<<<< HEAD
include('src/connexion.php');
=======

include 'src/connexion.php';
>>>>>>> af2aac3e33ff47d6f8d736ff2c06bf94c11c5288
if (empty($_POST['mail'])) //On est dans la page de formulaire
{
	echo '<form method="post" action="?rub=login">
	<fieldset>
	<legend>Connexion</legend>
	<p>
    <label class="labelLogin" for="mail">Adresse email :</label><input name="mail" type="text" id="mail" /><br/>
	<label class="labelLogin" for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
	</p>
	</fieldset>
	<p><input type="submit" value="Connexion" /></p></form>
	<a href="?rub=inscription">Pas encore inscrit ?</a>
	 
	</div>';
}
else
{
    $message='';
    if (empty($_POST['mail']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>
	<p>Cliquez <a href="?rub=login">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
    {
        $result = $link->query("SELECT * FROM utilisateur WHERE mail = '". $_POST['mail']."'");
        $user = $result->fetch_object();
        if($_POST['password'] == $user->mdp)
        {
            $message = "Félicitation ".$user->nom." ".$user->prenom.", vous êtes connecté !";
        }
        $_SESSION['user'] = $user;
    }
	if (false) // Acces OK !
	{

	}
	else // Acces pas OK !
	{

	}
    
    echo $message;
}

?>
