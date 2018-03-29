<header class="sote-container">
<span class="name"><span id="blanc">Langage Web</span><span id="bleu"> LPSIL</span></span>
<nav class="site-pusher">
    <div class="dropdown">
    <a href='?rub=accueil#no-js-slider-2'><button class="dropbtn">Accueil</button></a>
    </div>
    <?php
        include('menuE.php');
        echo $menu1;
        echo $menu2;
        
    ?>
    <div class="dropdown">
        <button class="dropbtn">Publications</button>
        <div class="dropdown-content">
            <a href='?rub=publication#2011'>2011</a>
            <a href="?rub=publication#2010">2010</a>
            <a href="?rub=publication#2009">2009</a>
            <a href="?rub=publication#2008">2008</a>
            <a href="?rub=publication#2007">2007</a>
            <a href="?rub=publication#2006">2006</a>
            <a href="?rub=publication#2005">2005</a>
            <a href="?rub=publication#2004">2004</a>
            <a href="?rub=publication#2003">2003</a>
            <a href="?rub=publication#2002">2002</a>
        </div>
    </div>
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