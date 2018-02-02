<?php
<<<<<<< HEAD
=======
    $link = new mysqli("localhost","root","","projet_lpmi");
>>>>>>> ac733a60da19a057f02e608f68b9adb8e16eacdb
    $link = new mysqli("localhost","root","","baselpmi");
    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }
?>