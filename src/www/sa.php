<h1 class="titreRe"> La Subdivision adaptative </h1>

<p class="paraRe">
    Cette distance peut être utilisée comme critère géométrique d'arrêt lors de la subdivision partielle des surfaces générées par le principe de Loop ; 
    cette subdivision est dite adaptative. 
    Elle permet de réduire l'augmentation du nombre de faces des objets à chaque subdivision. 
    Nous nous sommes également intéressés à l'image d'un point quelconque du maillage initial de manière itérative et par suite à l'image d'une courbe quelconque sur la surface. 
    De plus, nous avons travaillé sur la majoration de la distance entre l'intersection des maillages initiaux et l'intersection des surfaces limites. 
    Malheureusement, les seules majorations valables sont trop grossières. Suite à des problèmes rencontrés par Mac Guff Ligne (entreprise créant des films d'animation et des films publicitaires), 
    nous avons réfléchi au problème de la subdivision progressive. En effet, lorsqu'une caméra se rapproche d'un objet, il est lissé à l'aide d'un processus de subdivision. 
    Mais lors de ce lissage, une discontinuité apparaît. 
    Nous avons résolu ce problème en effectuant une interpolation linéaire entre les surfaces de subdivision de deux niveaux consécutifs.
</p>

<p class="paraRe">
    Un autre thème abordé est celui de la subdivision non uniforme (on parle aussi de subdivision adaptative ou locale). 
    Nous continuons à travailler sur le principe approximant de Loop. Le procédé de subdivision non uniforme consiste à subdiviser uniquement les régions sélectionnées d'un maillage de contrôle. 
    Cette sélection peut être effectuée soit manuellement soit automatiquement en fonction des critères choisis (comme la précision du maillage de contrôle par rapport à la surface limite, 
    le point de vue…). Nous avons choisi les règles de subdivision afin d'éviter la création de trous et pour générer un maillage progressif avec des valences (nombres d'arêtes adjacentes à un sommet) approchant la valence régulière. 
    La Figure 4 illustre la subdivision partielle du modèle chat où seules les oreilles sont sélectionnées.
</p>

<figure>
    <img src="src/assets/images/sa1.gif" alt="" srcset=""></img>
    <img src="src/assets/images/sa2.gif" alt="" srcset=""></img>
    <figcaption><b>Figure 4.</b>Subdivision successive des faces du maillage dont les sommets sont en rose.</figcaption>
</figure>

<p class="paraRe">
    Nous avons proposé un principe de Loop adaptatif appelé algorithme diagonal qui génère un maillage progressif avec des valences stables tout en produisant un nombre de face réduit 
    (le plus petit possible).
</p>

<figure>
    <img src="src/assets/images/sa3.gif" alt="" srcset=""></img>
    <figcaption><b>Figure 5.</b>Subdivision adaptative du lapin avec l'algorithme diagonal.</figcaption>
</figure>