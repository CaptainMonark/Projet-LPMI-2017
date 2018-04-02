<?php
    include('connexion.php');
    session_start();
    if(isset($_POST['dateP']) && isset($_POST['titreP']))
    {       
        $query = "INSERT INTO dossierouvert (nom,date,enseignement) values ('".$_POST["titreP"]."','".$_POST['dateP']."','".$_POST["ens"]."')";
        echo $query;
        mysqli_query($link,$query);// OR die (header('Location: ../?rub=enseignement&amp;enseignement='.strtoupper($path)));
        //$_SESSION['succes'] = true;
            
    }

?>
