<?php
if(isset($_SESSION['user']) && $_SESSION["user"]->profil == 0 && isset($_GET['page']))
{
    echo '<div class="login">
    <div class="login-page">
    <div class="form">
    <form class="register-form" method="post" action="src/ajouterProjet" enctype="multipart/form-data">
    <input name="dossier" id="dossier" type="text" value="'.$_GET['page'].'" disabled><br/>
    <input name="ens" id="ens" type="hidden" value="'.$_GET['page'].'">
    <input name="dateP" id="dateP" type="date"><br />
    <input type="text" name="titreP" placeholder="Titre du projet" id="titreP" /><br />
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

