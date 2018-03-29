<?php
if(isset($_SESSION['user']) && $_SESSION["user"]->profil == 0 && isset($_GET['page']))
{
    echo '<div class="login">
    <div class="login-page">
    <div class="form">
    <form class="register-form" method="post" action="src/ajouterFichier?page='.$_GET['page'].'" enctype="multipart/form-data">
    <input type="text" value="'.$_GET['page'].'" name="dossier" disabled><br/>
    <input type="file" name="mon_fichier" id="mon_fichier" /><br />
    <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
    <input type="submit" class="button" name="submit" value="Envoyer" />
    </form>
    </div>
    </div>
    </div>';
}
else
{
    header ("Location: ?rub=accueil#no-js-slider-1" );	
}
?>

