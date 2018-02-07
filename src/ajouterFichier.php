<?php
    if(isset($_FILES['mon_fichier']))
    { 
        $dossier = 'fichier/LPSIL/';
        $fichier = basename($_FILES['mon_fichier']['name']);
        if(move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
            echo 'Upload effectué avec succès !';
        }
        else //Sinon (la fonction renvoie FALSE).
        {
            echo 'Echec de l\'upload !';
        }
    }
?>
