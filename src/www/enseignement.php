
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
    include('src/listerFichier.php');
?>