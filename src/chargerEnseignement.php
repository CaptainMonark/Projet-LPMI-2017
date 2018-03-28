<div class="fondS2"></div>
<div class="slide2">
    <div class="listI">
        <?php 
            include('connexion.php'); 

            $query = "select * from enseignement order by id";
            $div = "";
            
            if($result = mysqli_query($link,$query)){
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    if(isset($_SESSION['user']))
                    {
                        $alias = $row["alias"];
                    }
                    else
                    {
                        $alias = "login";                        
                    }
                    $div = $div."<div class='item' >"
                    ."<figure class='figure'>"
                    ."<img class='image' src='src/assets/images/".$row["alias"].".png' />"
                    ."</figure>"
                    ."<p class='title'>".$row["titre"]."</p>"
                    ."<div class='acces'>"
                    ."<a class='acces_button' href='?rub=".$alias."'>Accéder</a>"
                    ."</div>"
                    ."</div>";
                }
                mysqli_free_result($result);
            }       
            echo $div;
        ?>
    </div>
</div>