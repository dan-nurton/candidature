<?php

namespace Candidature\Controler;
use Candidature\Utils\ConnectBdd;
use Candidature\DAO\FolderDAO;
use Candidature\Entity\Folder;

class Controler {

    public function verifyInputIsNotEmpty(){
        if (isset($_POST['submitCsv'])){
            if(isset($_POST['uploadCsv'])){
                return true;
            }
        }
    }

    public function verifyFile(){
        $verifyInput = $this->verifyInputIsNotEmpty();
        //Extensions autorisées
        $validExtension = ['csv'];
        //Met tout la chaine en minuscule, ignore le 1er caractere de la chaine et ajoute un point a la fin
        $uploadExtension = strtolower(  substr(  strrchr($_FILES['uploadCsv']['name'], '.')  ,1)  );
        if($verifyInput === true && in_array($uploadExtension, $validExtension)){
            echo 'Ok';
        }
        else{
            echo 'Fichier incorrect';
        }
    }

    public function parseCsv($csv) {
        $csv = new SplFileObject('Projet_application_de_candidature.csv', 'r');
        $csv->setFlags(SplFileObject::READ_CSV);
        $csv->setCsvControl(';');
        $num = "0";
        foreach ($csv as $ligne) {
            $tabDate[] = $ligne[1];
            $tabLastName[] = $ligne[3];
            $tabFirstName[] = $ligne[5];
            $tabPhone[] = $num+$ligne[15];
            $tabMail[] = $ligne[16];
            $tabCareer[] = utf8_encode($ligne[54]);
        }
        $datas = array('folderCreation' => $tabDate[1], 'lastName' => $tabLastName[1], 'firstName' => $tabFirstName [1], 'phoneNumber' => $num .= $tabPhone[1], 'career' => $tabCareer[1], 'mail'=>$tabMail[1]);
        $this->sendJson($datas);
    }

    public function sendJson($datas) {
        $folder = new Folder($datas);
        $bdd = new ConnectBdd();
        $connection = $bdd->connect();
        $folderDao = new FolderDAO($connection);
        $folderDao->insertData($folder);
    }

    public function getFolder() {
        
    }

    public function getUser() {
        
    }

}
