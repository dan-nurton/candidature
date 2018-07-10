<?php

namespace Candidature\Controler;

class Controler {

    public function parseCsv($csv) {
        $csv = new SplFileObject('Projet_application_de_candidature.csv', 'r');
        $csv->setFlags(SplFileObject::READ_CSV);
        $csv->setCsvControl(';');
        $num = 0;
        foreach ($csv as $ligne) {
            $tabDate[] = $ligne[1];
            $tabLastName[] = $ligne[3];
            $tabFirstName[] = $ligne[5];
            $tabPhone[] = $ligne[15];
            $tabCareer[] = $ligne[54];
        }
        $datas = array('folderCreation' => $tabDate[1], 'lastName' => $tabLastName[1], 'firstName' => $tabFirstName [1], 'phoneNumber' => $num .= $tabPhone[1], 'career' => $tabCareer[1]);
        $this->sendJson($datas);
    }

    public function sendJson($datas) {
        $folder = new Folder($datas);
        $bdd = new ConnectBdd();
        $connection = $bdd->connect();
        $folderDao = new FolderDAO($connection);
    }

    public function getFolder() {
        
    }

    public function getUser() {
        
    }

}
