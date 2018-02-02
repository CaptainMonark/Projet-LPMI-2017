<?php
  $link = new mysqli("localhost","root","","baselpmi");
  if(mysqli_connect_errno()){
      printf('Echec de la connexion: %s\n"', mysqli_connect_error());
  }
$result = $link->query("SELECT * FROM utilisateur WHERE mail = 'f.l@gmail.com'");
$mail = $result->fetch_object();
echo $mail->nom;
?>