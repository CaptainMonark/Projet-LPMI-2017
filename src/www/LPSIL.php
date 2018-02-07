
<form method="post" action="reception.php" enctype="multipart/form-data">
    <label for="icone">Icône du fichier :</label><br />
    <input type="file" name="icone" id="icone" /><br />
    <label for="mon_fichier">Fichier :</label><br />
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <input type="file" name="mon_fichier" id="mon_fichier" /><br />
    <label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
    <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
    <label for="description">Description de votre fichier (max. 255 caractères) :</label><br />
    <textarea name="description" id="description"></textarea><br />
    <input type="submit" name="submit" value="Envoyer" />
</form>


<?php
$chemin = 'src/fichier/LPSIL';
lister($chemin);
    
    function lister($chemin){
        $nb_fichier = 0;
        $div = "";
        $repertoire = $chemin;
        if($dossier = opendir($repertoire)){
            while(false !== ($fichier = readdir($dossier)))
            {
                if($fichier !== '.' && $fichier !=='..'){
                    if(is_dir($repertoire."/".$fichier)){
                        $div = $div."<h1>".$fichier."</h1>";
                        lister($repertoire."/".$fichier);
                    }else{
                    $nb_fichier++;
                    //echo '<li><a href="src/fichier/LPSIL/"'. $fichier . '">' . $fichier . '</a></li>';
        
                    $div = $div."<div class='item' >"
                    ."<figure class='figure'>"
                    ."<img class='image' src='src/assets/images/LPSIL.png' />"
                    ."<a class='a' href='src/fichier/LPSIL/'". $fichier . "'></a>"
                    ."</figure>"
                    ."<p class='title'>".$fichier."</p>"
                    ."<div class='acces'>"
                    ."<a class='acces_button' href='src/fichier/LPSIL/'". $fichier ."'>Accéder</a>"
                    ."</div>"
                    ."</div>";
                    }
                }
            }
            closedir($dossier); 
        }
        else{
            echo 'Le dossier n\' a pas pu être ouvert';
        }echo $div;
    }
    
         

?>