
<?php
    include('src/connexion.php');
    $menu = "";
    $first = true;
        $menu = $menu.'<div class="dropdown"><a class="dropbtn"">Enseignement</a>';
            $query2 = "select * from enseignement";
            if($result2 = mysqli_query($link,$query2)){
                while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                    if($first){
                        $menu = $menu.'<div class="dropdown-content">';
                        $first = false;
                    }
                    $menu = $menu."<a href='?rub=enseignement&amp;enseignement=".strtoupper($row2["alias"])."'>".$row2["titre"]."</a>";
                }
                if(!$first){
                    $menu = $menu.'</div>';
                    $first = true;
                }
                mysqli_free_result($result2);
            }
            $menu1= $menu.'</div>';

    $menu = "";
    $first = true;
            $menu = $menu.'<div class="dropdown"> <a class="dropbtn">Recherche</a>';
            $query2 = "select * from recherche";
            if($result2 = mysqli_query($link,$query2)){
                while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                    if($first){
                        $menu = $menu.'<div class="dropdown-content">';
                        $first = false;
                    }
                    $menu = $menu."<a href='?rub=".strtolower($row2["alias"])."'>".$row2["titre"]."</a>";
                }
                if(!$first){
                    $menu = $menu.'</div>';
                    $first = true;
                }
                mysqli_free_result($result2);
            }
            $menu2= $menu.'</div>';

    
?>