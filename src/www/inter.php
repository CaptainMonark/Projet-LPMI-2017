<h1 class="titreRe"> Calcul des intersections entre surfaces de subdivision </h1>

<p class="paraRe">
    Ces surfaces sont déjà largement utilisées en modélisation mais leur champ d'application actuel est réduit au lissage des modèles (Modeleurs, films d'animation...). 
    Pour que ces surfaces soient pleinement exploitées, il est nécessaire de reconstruire les outils préalablement connus pour d'autres types de surfaces ou de solides. 
    Le calcul des opérations booléennes, par exemple, est fondamental pour la construction d'objets complexes à partir d'objets plus simples. 
    De façon générale, une opération booléenne se déroule en deux étapes :
</p>
<ul>
    <li>Calcul des courbes d'intersection entre les surfaces des deux primitives impliquées dans l'opération : 
    des points d'intersection sont trouvés, classés puis connectés pour approcher la courbe d'intersection.</li>
    <li>Conservation des parties des primitives nécessaire à la construction de la surface de l'objet résultant selon l'opération booléenne envisagée.</li>
</ul>

<figure>
    <img src="src/assets/images/inter1.gif" alt="" srcset=""></img>
    <img src="src/assets/images/inter2.gif" alt="" srcset=""></img>
    <img src="src/assets/images/inter3.gif" alt="" srcset=""></img>
    <img src="src/assets/images/inter4.gif" alt="" srcset=""></img>
    <figcaption><b>Figure 2.</b>Courbes d'intersections à des niveaux de subdivision successifs.</figcaption>
</figure>

<p class="paraRe">
    Courbe d'intersection entre deux surfaces de subdivision<br/><br/>
    Un des problèmes encore mal traité est le problème des intersections de surfaces de subdivision. 
    La Figure 2 représente deux surfaces de subdivision (l'une claire et l'autre foncée) en intersection. 
    L'importante augmentation du nombre de faces des surfaces à chaque subdivision implique une complexité algorithmique croissante lors du calcul des courbes polygonales d'intersection (représentées en noir). 
    Après avoir répertorié différentes méthodes de calcul des courbes d'intersection, nous avons implémenté un algorithme de base. 
    Cet algorithme naïf consiste à calculer les intersections entre chaque face du premier objet et toutes celles du deuxième. 
    Ensuite, nous avons réduit la complexité en utilisant les propriétés locales des surfaces de subdivision. 
    Dans un premier temps, en utilisant la notion de voisinage puis en organisant les faces en intersection à l'aide d'un graphe biparti.
</p>