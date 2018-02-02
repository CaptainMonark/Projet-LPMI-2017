<?php
    $link = new mysqli("localhost","root","","projet_lpmi");
    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }
    if (!$link->set_charset("utf8")) {
        exit();
    } 
?>