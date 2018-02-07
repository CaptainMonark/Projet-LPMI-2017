<?php
    include('connexion.php');
    if(isset($_FILES['mon_fichier']) && isset($_POST['titre']))
    { 
        $dossier = 'fichier/LPSIL/';
        $fichier = basename($_FILES['mon_fichier']['name']);
        
        $div = "";

        if(move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
            $query = "INSERT INTO fichier (nom,nom_ex) values ('".$_POST["titre"]."','".$fichier."')";
            echo $query;
            mysqli_query($link,$query)  OR die (header('Location: ../?rub=LPSIL'));
            echo 'Upload effectué avec succès !';
        }
        else //Sinon (la fonction renvoie FALSE).
        {
            header('Location: ../?rub=LPSIL');
            echo 'Echec de l\'upload !';
        }
    }
    mysqli_close($link);
?>
