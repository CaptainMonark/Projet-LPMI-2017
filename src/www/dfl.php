<h1 class="titreRe"> Les Déformations de formes libre sur les surfaces de subdivision </h1>

<p class="paraRe">
    Actuellement, je travaille en collaboration avec R. 
    Raffin du LSIS (Marseille) sur une méthode de déformations libres pour modifier un objet défini par une surface de subdivision. 
    Le but de ce travail est de fournir à l'utilisateur du modeleur un outil plus intuitif que les déformations de points de contrôle. 
    Les déformations libres sont définies par une zone de contrainte (point, courbe…), une enveloppe d'influence (sphère…) et un chemin de déformation. 
    Pour pouvoir appliquer ces méthodes aux surfaces de subdivision, il faut donc s'intéresser au suivi d'un point ou d'une courbe sur les maillages successifs obtenus lors de la subdivision. 
    La Figure 5 montre une déformation de ce type appliquée sur le modèle lapin. 
    Ces travaux permettent de modéliser plus facilement des objets 3D et peuvent également être utilisés pour animer des objets.
</p>
<figure>
    <img src="src/assets/images/dfl1.gif" alt="" srcset=""></img>
    <img src="src/assets/images/dfl2.jpg" alt="" srcset=""></img>
    <figcaption><b>Figure 6.</b>Exemple de déformations libres.</figcaption>
</figure>

<p class="paraRe">
    Nous avons étendus ces travaux de déformations aux contraintes courbes sur la surface de subdivision. 
    Une courbe polygonale est choisie sur le maillage à un niveau donné de subdivision ainsi qu'un chemin de déformation et une zone d'influence. 
    On peut alors effectuer la déformation au niveau de subdivision souhaité et on peut également choisir de subdiviser le maillage entièrement ou localement.
</p>

<figure>
    <img src="src/assets/images/dfl3.gif" alt="" srcset=""></img>
    <img src="src/assets/images/dfl4.jpg" alt="" srcset=""></img>
    <img src="src/assets/images/dfl5.gif" alt="" srcset=""></img>
    <img src="src/assets/images/dfl6.jpg" alt="" srcset=""></img>
    <figcaption><b>Figure 7.</b>A gauche, la courbe polygonale de contrainte, la zone d'influence (en rouge) et le chemin de déformation puis le maillage résultant après déformation et à droite, les mêmes contraintes avec une subdivision adaptative.</figcaption>
</figure>