<?php
$chemin = 'src/fichier/'.$_GET['enseignement'];
lister($chemin,$link,$_GET['enseignement']);
$_SESSION['dossier'] = $_GET['enseignement'];
$ajout = '';
function lister($chemin,$link,$page){
        $nb_fichier = 0;
        $div = "";
        $repertoire = $chemin;
        if($dossier = opendir($repertoire)){
            while(false !== ($fichier = readdir($dossier)))
            {
                if($fichier !== '.' && $fichier !=='..'){
                    if(is_dir($repertoire."/".$fichier)){
                       // $div = $div."<div><h1>".$fichier."</h1></div>";
                        lister($repertoire."/".$fichier);
                    }else{
                        $nb_fichier++;
                        $query = "select * from fichier where nom_ex = '".$fichier."'";
                        $div = "";
                        if($result = mysqli_query($link,$query)){
                            while($row = mysqli_fetch_row($result)){ 
                                //echo '<li><a href="src/fichier/LPSIL/"'. $fichier . '">' . $fichier . '</a></li>';
                                $div = $div."<div class='item' >"
                                ."<figure class='figure'>"
                                ."<img class='image' src='src/assets/images/".$page.".png' />"
                                ."<a class='a' onclick= openfile('".$repertoire."','".$fichier."')></a>"
                                ."</figure>"
                                ."<p class='title'>".$row['1']."</p>"
                                ."<div class='acces'>"
                                ."<a class='acces_button' onclick= openfile('".$repertoire."','".$fichier."') >Accéder</a>"
                                ."</div>"
                                ."</div>";
                                echo $div;
                            }mysqli_free_result($result);
                        }
                    }
                }
            }
            closedir($dossier); 
            
        }
        else{
            echo 'Le dossier n\' a pas pu être ouvert';
        }
        
        
}
if($_SESSION["user"]->profil == 0)
{
    $ajout = $ajout."<div class='item' >"
    ."<figure class='figure'>"
    ."<img class='image' src='src/assets/images/ajouter.png' />"
    ."<a class='a' href='?rub=formulaireAjout'></a>"
    ."</figure>"
    ."<p class='title'>Ajouter un fichier </p>"
    ."<div class='acces'>"
    ."<a class='acces_button' href='?rub=formulaireAjout&amp;page=".$_GET['enseignement']."'>Ajouter</a>"
    ."</div>"
    ."</div>";
    echo $ajout;
}
mysqli_close($link);
?>