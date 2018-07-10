<?php
    require 'vendor/autoload.php';
    use Candidature\Entity\Folder;

   $csv = new SplFileObject('Projet_application_de_candidature.csv', 'r');
        $csv->setFlags(SplFileObject::READ_CSV);
        $csv->setCsvControl(';');
        $num = 0;
        foreach ($csv as $ligne) {
            $tabDate[] = $ligne[1];
            $tabLastName[] = $ligne[3];
            $tabFirstName[] = $ligne[5];
            $tabPhone[] = $ligne[15];
            $tabMail[] = $ligne[16];
            $tabCareer[] = $ligne[54];
        }
        $datas = array('folderCreation' => $tabDate[1], 'lastName' => $tabLastName[1], 'firstName' => $tabFirstName [1], 'phoneNumber' => $num .= $tabPhone[1], 'career' => $tabCareer[1], 'mail'=>$tabMail[1]);
      
          $folder = new Folder($datas);
          