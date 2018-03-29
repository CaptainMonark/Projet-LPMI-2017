<?php
//include('src/connexion.php');
//$result = $link->query("SELECT * FROM utilisateur WHERE mail = 'f.l@gmail.com'");
//$mail = $result->fetch_object();
//echo $mail->nom;

if(isset($_SESSION['etat'])){
    echo $_SESSION['etat'];
    unset($_SESSION['etat']);
}
?>


<div class="login">
<div class="login-page">
    <div class="form">
        <form class="register-form" method="post" action="src/ajouterUtilisateur.php">
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required/>
            <input type="text" name="nom" id="nom" placeholder="Nom" required/>
            <input type="text" placeholder="Adresse e-mail" name="addrmail" id="addrmail" required/>
            <input type="password" placeholder="Mot de passe" name="password" id="password" required/>
            <input type="password" placeholder="Confirmez votre mot de passe" name="confirmpassword" id="confirmpassword" required/>
            <input type="submit" class="button" value="S'inscrire" />
            <p class="message">Déja inscrit ? <a href="?rub=login" >Se connecter</a></p>
        </form>
    </div>
</div>
</div>


