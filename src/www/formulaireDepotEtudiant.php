<?php
include('src/connexion.php');


if(isset($_SESSION['user']) && isset($_GET['page']) && isset($_GET['projet']))
{
    $query = "select * from dossierouvert where date >= CURDATE()";
    if($result = mysqli_query($link,$query)){
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            if($row['nom'] == $_GET['projet']){
                echo '<div class="login">
                <div class="login-page">
                <div class="form">
                <form class="register-form" method="post" action="src/ajouterFichierEtu?page='.$_GET['page'].'&projet='.$_GET['projet'].'" enctype="multipart/form-data">
                <input type="text" value="'.$_GET['page'].'" name="dossier" disabled><br/>
                <input type="text" value="'.$_GET['projet'].'" name="projet" disabled><br/>
                <input type="file" name="mon_fichier" id="mon_fichier" /><br />
                <input type="text" name="titre" placeholder="Titre du fichier" id="titre" /><br />
                <input type="submit" class="button" name="submit" value="Envoyer" />
                <p class="message">Voir la liste des étudiants inscrits ? <a href="?rub=regarderInscription&amp;page='.$_GET['page'].'&amp;projet='.$_GET['projet'].'" >Voir</a></p>
                </form>
                </div>
                </div>
                </div>';
                
                
            }else{
                echo 'Vous ne pouvez pas accédez a ce projet';
            }
        }
        $nbrow = mysqli_num_rows($result);
        if($nbrow == 0){
            echo'Vous ne pouvez plus accédez a ce projet';
        }
        
        
    }

}
else
{
    header ("Location: ?rub=accueil#no-js-slider-1" );	
}

if(isset($_SESSION['succes'])){
    if($_SESSION['succes'] == true){
        echo 'Upload Réussie';
        unset($_SESSION['succes']);
    }else{
        echo 'Erreur lors de l upload';
        unset($_SESSION['succes']);
    }
}
?>

