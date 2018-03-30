<?php
    include('connexion.php');
    session_start();
    if(isset($_FILES['mon_fichier']) && isset($_POST['titre'])  && isset($_SESSION['user']))
    { 
        $path = strtoupper($_GET['page']);
        $path2 = $_GET['projet'];
        $dossier = 'fichierEtu/'.$path.'/';
        if(!is_dir($dossier)){
            mkdir($dossier);
        }
        $dossier = $dossier.$path2.'/';
        if(!is_dir($dossier)){
            mkdir($dossier);
         }
        $fichier = basename($_FILES['mon_fichier']['name']);
        
        $div = "";

        if(move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
            $query = "INSERT INTO fichieretu (nom,nom_ex,idU,projet) values ('".$_POST["titre"]."','".$fichier."',".$_SESSION['user']->id.",'".$path2."');";
            echo $query;
            mysqli_query($link,$query) OR die ( header('fail'));
            $_SESSION['succes'] = true;
           header('Location: ../?rub=formulaireDepotEtudiant&page='.$path.'&projet='.$path2);
        }
        else //Sinon (la fonction renvoie FALSE).
        {
            header('Location: ../?rub=formulaireDepotEtudiant&page='.$path.'&projet='.$path2);
            $_SESSION['succes'] = false;
        }
    }

?>
