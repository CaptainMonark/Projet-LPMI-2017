<header>
<span class="name"><span id="blanc">Langage Web</span><span id="bleu"> LPSIL</span></span>
<nav>
    <div class="dropdown">
    <a href='?rub=accueil#no-js-slider-2'><button class="dropbtn">Accueil</button></a>
    </div>
    <?php
        include('menuE.php');
        echo $menu1;
        echo $menu2;
        
    ?>
    <div class="dropdown">
        <?php
        if(!isset($_SESSION['user']))
        {
        echo '<button class="dropbtn">Connexion</button>
        <div class="dropdown-content">
            <a href="?rub=login">S\'identifier</a>
            <a href="?rub=inscription">S\'inscrire</a>
        </div>';
        }
        else
        {
        echo '<button class="dropbtn">'.$_SESSION['user']->nom.'</button>
        <div class="dropdown-content">
            <a href="?rub=deconnexion">Deconnexion</a>
        </div>';
        }
        ?>
    </div>
    
</nav>
</header> 