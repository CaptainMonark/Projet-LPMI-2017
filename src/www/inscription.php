<?php
include('src/connexion.php');
$result = $link->query("SELECT * FROM utilisateur WHERE mail = 'f.l@gmail.com'");
$mail = $result->fetch_object();
echo $mail->nom;
?>