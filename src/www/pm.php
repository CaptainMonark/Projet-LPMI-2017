<h1 class="titreRe"> La précision des maillages de controle de subdivision par rapport à la surface limite </h1>

<p class="paraRe">
    Précision du maillage de controle par rapport à la surface limite
    Les principes de subdivision étudiés durant cette thèse sont approximants. 
    Ainsi, par définition, les maillages de contrôle successifs approchent la surface limite. Nous nous sommes donc intéressés à la précision de cette approximation. 
    Pour mesurer cette précision, nous avons introduit une distance puis une majoration de cette distance. 
    En effet, à partir de l'image des sommets du maillage de contrôle sur la surface limite, on peut majorer la distance d'un maillage à cette surface limite pour de tels principes.
</p>

<p class="paraRe">
    Profondeur de subdivision
    Pour des applications comme la CAO, il peut-être intéressant de connaître le nombre d'itérations à effectuer avant de commencer le processus de subdivision en fonction de la précision souhaitée, 
    nous proposons un calcul de cette profondeur pour les surfaces générées par le principe de Doo-Sabin pour des maillages réguliers (valence 4). 
    Nous avons également généralisé ce calcul aux surfaces générées par le principe de Loop pour des maillages de valences quelconques. 
    Contrairement aux surfaces générées par le principe de Catmull-Clark ou celui de Doo-Sabin, ces surfaces ne reposent pas sur le produit tensoriel de deux courbes B-splines. 
    Elles sont basées sur les box-splines tri-directionnelles.
</p>

<p class="paraRe">
    Place de stockage des surfaces de subdivision
    La connaissance a priori du nombre de subdivision à effectuer permet de déterminer facilement le nombre de faces du maillage de contrôle à la précision souhaitée lors de la subdivision complète sans effectuer de subdivisions. 
    Par contre, lors de la subdivision adaptative, il n'est pas possible de connaître le nombre de faces du maillage de contrôle à la précision souhaitée mais nous avons proposé la majoration suivante. 
    Pour chaque sommet du maillage de contrôle initial, nous déterminons le nombre de subdivisions à effectuer pour obtenir la subdivision souhaitée. 
    Ensuite, le nombre de subdivisions à effectuer pour la face sera égal au nombre maximal de subdivisions de ces sommets. 
    La majoration correspond alors au nombre de faces engendrées lors de la subdivision complète de chaque face au niveau de subdivision correspondant.
</p>

<figure>
    <img src="src/assets/images/pm1.gif" alt="" srcset=""></img>
    <img src="src/assets/images/pm2.gif" alt="" srcset=""></img>
    <img src="src/assets/images/pm3.gif" alt="" srcset=""></img>
    <img src="src/assets/images/pm4.gif" alt="" srcset=""></img>
    <figcaption><b>Figure 3..</b>Maillages de contrôle successifs lors de la subdivision adaptative du pingouin.</figcaption>
</figure>

<p class="paraRe">
    Pour le modèle pingouin initialement formé de 500 faces et une précision souhaitée de 0.2, 
    par subdivision successives (Figure 3), le maillage est constitué de 8213 faces et notre majoration est à 10544. 
    Cette majoration a priori permet de mieux appréhender la place de stockage nécessaire, en effet, 
    la majoration par le nombre de faces engendré lors de la subdivision complète est beaucoup plus importante (32000 faces).
</p>