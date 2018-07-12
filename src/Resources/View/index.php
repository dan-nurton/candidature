<?php
 require_once ('../../Controler/Controler.php');
    $controler = new \Candidature\Controler\Controler();

?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Adrar - Candidature</title>
        </head>

        <body>
            <header>
                <h1>Adrar - Candidature</h1>
            </header>

            <div class="upload">
                <form method="post" action="index.php" enctype="multipart/form-data">
                    <label for="uploadCsv">Fichier csv : </label>
                    <input type="file" name="uploadCsv" value="csv">
                    <br/>
                    <button type="submit" name="submitCsv" id="submit"
                    >Envoyer</button>
                </form>
            </div>

            <div id="resultat"></div>

        </body>

        <?php
        if (isset($_POST['submitCsv'])){
            //var_dump($_FILES['uploadCsv']['name']);
                $controler->verifyInputIsNotEmpty();
                
              
        }
        ?>
    </html>