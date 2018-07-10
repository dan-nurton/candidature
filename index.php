<?php
    require 'vendor/autoload.php';

use Candidature\Entity\Folder;
use Candidature\Utils\ConnectBdd;
use Candidature\DAO\FolderDAO;

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

$folder = new Folder($datas);

var_dump($folder);

$bdd = new ConnectBdd();
$connection = $bdd->connect();
$folderDao = new FolderDAO($connection);
$folderDao->insertData($folder);
