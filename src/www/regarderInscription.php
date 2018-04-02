<?php
include('src/connexion.php');
$tableau = "";
    $query = "select u.nom as nom, u.prenom as prenom, fe.nom as titre from utilisateur u JOIN fichieretu fe ON fe.idU = u.id where projet = '".$_GET['projet']."'";
    if($result = mysqli_query($link,$query)){
        $tableau = ' 
        <table id="t01">
            <tr> 
                <th>Nom</th> 
                <th>Prenom</th>
                <th>Titre du fichier</th>
            </tr> ';
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $tableau = $tableau.'<tr> <td>'.$row['nom'].'</td> <td>'.$row['prenom'].'</td></td> <td>'.$row['titre'].'</td> </tr> ';
        }
        $tableau = $tableau.'</table>';
        mysqli_free_result($result);
        echo $tableau;
        //echo '<p class="message">Retourner a la page  précédente? <a href="?rub=formulaireDepotEtudiant&amp;page='.$_GET['page'].'&amp;projet='.$_GET['projet'].'" >Voir</a></p>';
}

?>