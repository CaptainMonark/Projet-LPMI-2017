<?php

include ('connexion.php');
if (!empty($_POST['addrmail']) 
    && !empty($_POST['password']) 
    && !empty($_POST['prenom']) 
    && !empty($_POST['nom']) 
    && !empty($_POST['confirmpassword']) 
    && ($_POST['password'] == $_POST['confirmpassword']))
    {
        $query = "INSERT INTO utilisateur (nom, prenom, mail, mdp, profil) VALUES ('".$_POST['prenom']."', '".$_POST['nom']."', '".$_POST['addrmail']."', '".$_POST['password']."', 1)";
        $link->query($query);
        $_SESSION['etat'] = 'Inscription réussie';
        header ("Location: ../?rub=inscription" );
    }else{
        $_SESSION['etat'] = 'Inscription Echoué';
    }
?>