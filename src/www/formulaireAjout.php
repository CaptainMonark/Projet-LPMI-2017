
<form method="post" action="src/ajouterFichier.php" enctype="multipart/form-data">
    <label for="icone">Icône du fichier :</label><br />
    <input type="file" name="icone" id="icone" /><br />
    <label for="mon_fichier">Fichier :</label><br />
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <input type="file" name="mon_fichier" id="mon_fichier" /><br />
    <label for="titre">Titre du fichier :</label><br />
    <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
    <input type="submit" name="submit" value="Envoyer" />
</form>

