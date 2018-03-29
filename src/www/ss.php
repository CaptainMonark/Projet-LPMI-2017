<h1 class="titreRe"> Les surfaces de subdivision </h1>

<p class="paraRe">
    La Figure 1 montre un exemple de surface de subdivision. De la gauche vers la droite, la surface est de plus en plus lisse. 
    Une surface de subdivision est une surface générée par une succession d'opérations de subdivision. 
    A partir d'un maillage polygonal basse résolution ou grossier M0 appelé réseau de contrôle initial, 
    l'application de règles de raffinement génère une suite de maillages de points de contrôle M1,...,Mi plus fins à chaque itération qui converge vers une surface lisse M∞. 
    Ces règles comprennent à la fois les règles géométriques qui déterminent les positions des points de contrôle du nouveau maillage à partir de ceux du maillage précédent et les règles de partage topologique qui décrivent le raffinement de la connectivité du polyèdre de contrôle et spécifient par conséquent les propriétés de la surface. 
    L'itération à l'infini de ce processus permet d'obtenir la surface limite (par exemple, B-spline ou Box-spline). Cette surface est lisse topologiquement semblable au réseau de contrôle.
</p>
<figure>
    <img src="src/assets/images/ss.png" alt="" srcset=""></img>
    <img src="src/assets/images/ss2.gif" alt="" srcset=""></img>
    <img src="src/assets/images/ss3.gif" alt="" srcset=""></img>
    <figcaption><b>Figure 1.</b> Exemple de surface de subdivision.</figcaption>
</figure>