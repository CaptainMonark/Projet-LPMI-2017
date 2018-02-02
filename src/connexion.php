<?php
    $link = new mysqli("localhost","root","","baselpmi");
    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }
?>