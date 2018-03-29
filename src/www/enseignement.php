
<?php
if(isset($_SESSION['succes'])){
    if($_SESSION['succes'] == true){
        echo 'Upload Réussie';
        unset($_SESSION['succes']);
    }else{
        echo 'Erreur lors de l upload';
        unset($_SESSION['succes']);
    }
}
if(isset($_SESSION['user']))
{
    include('src/listerFichier.php');
}
else
{
    $_SESSION["noAccess"] = true;
    include("login.php");
}
?>