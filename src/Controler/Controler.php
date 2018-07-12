<?php

namespace Candidature\Controler;

use Candidature\Utils\ConnectBdd;
use Candidature\DAO\FolderDAO;
use Candidature\Entity\Folder;
use SplFileObject;

class Controler {

    public function verifyInputIsNotEmpty(){
        if (isset($_POST['submitCsv'])){
                return $this->verifyFile();
        }
        
    }

    public function verifyFile(){
        $uploads_dir = '/Upload';
        var_dump($_FILES);
       if($_FILES['uploadCsv']['error'] == UPLOAD_ERR_OK){
           $tmp_name = $_FILES['uploadCsv']['tmp_name'];
           $name = $_FILES['uploadCsv']['name'];
           move_uploaded_file($tmp_name, $uploads_dir.'/'.$name);
           var_dump($tmp_name);
       }
    }


    public function parseCsv($file) {
        var_dump($file);
        $csv = new SplFileObject($file, 'r');
        $csv->setFlags(SplFileObject::READ_CSV);
        $csv->setCsvControl(';');
        $num = "0";
        foreach ($csv as $ligne) {
            $tabDate[] = $ligne[1];
            $tabLastName[] = $ligne[3];
            $tabFirstName[] = $ligne[5];
            $tabPhone[] = $num + $ligne[15];
            $tabMail[] = $ligne[16];
            $tabCareer[] = utf8_encode($ligne[54]);
        }
        $datasFolder = array('folderCreation' => $tabDate[1],
            'lastName' => $tabLastName[1],
            'firstName' => $tabFirstName [1],
            'phoneNumber' => $num .= $tabPhone[1],
            'career' => $tabCareer[1],
            'mail' => $tabMail[1]);
        $this->sendJson($datasFolder);
    }

    public function sendJson($datas) {
        $login = randomPassword(10, 1, "lower_case,upper_case,numbers,special_symbols");
        $folder = new Folder($datas, $login);
        $bdd = new ConnectBdd();
        $connection = $bdd->connect();
        $folderDao = new FolderDAO($connection);
        $folderDao->insertData($folder);
        $mail = $folder->getMail();
        $login = $folder->getLogin();
        $this->sendMail($mail, $login);
    }


    public function sendMail($mail,$login) {
        $sujet = 'E-mail de de l\'Adrar';
        $contenu = 'Vous trouverez ci-joint votre radiation de formation.Merci.';
        $contenu .= '<p><strong>Email</strong>: ' . $mail . '</p>';
        $contenu .= '<p><strong>Password</strong>: ' . $login . '</p>';
        $contenu .= '</body></html>';
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        mail($mail, $sujet, $contenu, $headers);

            for ($p = 0; $p < $count; $p++) {
                $pass = '';
                for ($i = 0; $i < $length; $i++) {
                    $n = rand(0, $symbols_length);
                    $pass .= $used_symbols[$n];
                }
                $passwords[] = $pass;
            }
            return $passwords;
        }

   

    public function getFolder() {
        $bdd = new ConnectBdd();
        $connection = $bdd->connect();
        $folderDao = new FolderDAO($connection);
        $folderDao->getData();
    }

    public function getUser() {
        
    }

}
