<?php
if(isset($_SESSION['user']) && $_SESSION["user"]->profil == 0 && isset($_GET['page']))
{
    echo '<form method="post" action="src/ajouterFichier?page='.$_GET['page'].'" enctype="multipart/form-data">
    <input type="text" value="'.$_GET['page'].'" name="dossier" disabled><br/>
    <label for="mon_fichier">Fichier :</label><br />
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <input type="file" name="mon_fichier" id="mon_fichier" /><br />
    <label for="titre">Titre du fichier :</label><br />
    <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
    <input type="submit" name="submit" value="Envoyer" />
    </form>';
}
else
{
    header ("Location: ?rub=accueil#no-js-slider-1" );	
}
?>

