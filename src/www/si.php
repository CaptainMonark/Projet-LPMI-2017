<h1 class="titreRe"> La Subdivision de Catmull-Clark inverse </h1>

<p class="paraRe">
    L'implémentation de la subdivision inverse dans le cadre de la subdivision de Loop a été réalisée en stage de DEA en 2005. 
    Nous avons ensuite cherché à effectuer cette subdivision inverse sur le principe de Catmull-Clark. 
    Le procédé se révèle plus compliqué que pour la subdivision de Loop car l'inversion de la matrice n'est pas possible pour les sommets de valence 3. 
    Il a donc fallu déterminer comment procéder pour ses points. 
    L'implémentation du cas où la valence est égale à 3 a été proposée en projet tutoré au M2 pro (Co-encadrement).
</p>
<figure>
    <img src="src/assets/images/si1.jpg" alt="" srcset=""></img>
    <img src="src/assets/images/si3.jpg" alt="" srcset=""></img>
    <img src="src/assets/images/si2.jpg" alt="" srcset=""></img>
    <img src="src/assets/images/si4.jpg" alt="" srcset=""></img>
    <figcaption><b>Figure 7.</b>Subdivision inverse du tore subdivisé 3 fois.</figcaption>
</figure>