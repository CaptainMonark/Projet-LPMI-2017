<div class="fondS2"></div>
<div class="slide2">
    <div class="Enseignement">
        <?php 
            include('connexion.php'); 

            $query = "select * from enseignement order by id";
            $div = "";
            
            if($result = mysqli_query($link,$query)){
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $div = $div."<div class='item' >"
                    ."<figure class='figure'>"
                    ."<img class='image' src='src/assets/images/".$row["alias"].".png' />"
                    ."<a class='a' href='?rub=detail&id=".$row['id']."'></a>"
                    ."</figure>"
                    ."<p class='title'>".$row["titre"]."</p>"
                    ."<div class='acces'>"
                    ."<a class='acces_button' href='?rub=".$row["alias"].".php'>Accéder</a>"
                    ."</div>"
                    ."</div>";
                }
                mysqli_free_result($result);
            }
            
            mysqli_close($link);

            echo $div;
        ?>
    </div>
</div>