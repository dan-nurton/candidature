<?php
require 'vendor/autoload.php';

use Candidature\Utils\ConnectBdd;
use Candidature\DAO\FolderDAO;
use Candidature\Entity\Folder;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Candidature</title>

    </head>
    <body>
        <div class="upload">
            <form method="post" action="index2.php" enctype="multipart/form-data">
                <label for="uploadCsv">Fichier csv : </label>
                <input type="file" name="uploadCsv">
                <br/>
                <button type="post" name="submitCsv" onclick="verify()" class="uploadCsv">Envoyer</button>
            </form>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="../js/ajaxCall.js"></script>

    </body>
</html>

<?php
if (isset($_POST['submitCsv'])) {
  
        var_dump($_FILES);
    
}
            

