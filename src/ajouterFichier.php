<?php
    $nom = "avatars/{$id_membre}.{$extension_upload}";
    $resultat = move_uploaded_file($_FILES['icone']['tmp_name'],$nom);
    if ($resultat) echo "Transfert réussi";
?>
