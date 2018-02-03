<?php
include('src/connexion.php');
$result = $link->query("SELECT * FROM utilisateur WHERE mail = 'f.l@gmail.com'");
$mail = $result->fetch_object();
echo $mail->nom;
//echo $mail->nom;
?>
<form method="post" action="?rub=inscription">
    <label class="labelLogin" for="prenom">Prénom :</label><input type="text" name="prenom" id="prenom" />
    <br />
    <label class="labelLogin" for="nom">Nom :</label><input type="nom" name="nom" id="nom" />
    <br />
    <label class="labelLogin" for="mail">Adresse email :</label><input name="mail" type="text" id="mail" />
    <p>Vous utiliserez cette adresse email pour vous connecter par la suite.</p>
    <br />
    <label class="labelLogin" for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
    <br />
    <label class="labelLogin" for="confirmpassword">Confirmez le mot de Passe :</label><input type="password" name="confirmpassword" id="confirmpassword" />
    <input type="submit" value="S'inscrire" /></form>
<?php
if (!empty($_POST['mail']) 
    && !empty($_POST['password']) 
    && !empty($_POST['prenom']) 
    && !empty($_POST['nom']) 
    && !empty($_POST['confirmpassword']) 
    && ($_POST['password'] == $_POST['confirmpassword']))
    {
        $link->query("INSERT INTO utilisateur (nom, prenom, mail, mdp) VALUES ('".$_POST['prenom']."', '".$_POST['nom']."', '".$_POST['mail']."', '".$_POST['password']."')");
    }
    

?>
