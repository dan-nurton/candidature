<?php
require 'vendor/autoload.php';
use Candidature\Utils\ConnectBdd;
use Candidature\DAO\FolderDAO;
use Candidature\Entity\Folder;

function randomPassword($length, $count, $characters) {
        $symbols = array();
        $passwords = array();
        $used_symbols = '';
        $pass = '';
        $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
        $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbols["numbers"] = '1234567890';
        $symbols["special_symbols"] = '!?~@#-_+<>[]{}';

        $characters = explode(",", $characters); 
        foreach ($characters as $key => $value) {
            $used_symbols .= $symbols[$value]; 
        }
        $symbols_length = strlen($used_symbols) - 1; 

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

 $csv = new SplFileObject('Projet_application_de_candidature.csv', 'r');
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
        $datas = array('folderCreation' => $tabDate[1],
            'lastName' => $tabLastName[1],
            'firstName' => $tabFirstName [1],
            'phoneNumber' => $num .= $tabPhone[1],
            'career' => $tabCareer[1],
            'mail' => $tabMail[1]);
        
         $login = randomPassword(10,1,"lower_case,upper_case,numbers");
        $folder = new Folder($datas,$login);
        $bdd = new ConnectBdd();
        $connection = $bdd->connect();
        $folderDao = new FolderDAO($connection);
        $folderDao->insertData($folder);
        $destinataire = $mail;
        $sujet = 'E-mail de de l\'Adrar';
        $contenu = 'Vous trouverez ci-joint votre radiation de formation';
        $contenu .= '<p><strong>Email</strong>: ' . $mail . '</p>';
        $contenu .= '<p><strong>Password</strong>: ' . $login . '</p>';
        $contenu .= '</body></html>';
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        mail($destinataire, $sujet, $contenu, $headers);
        
        
     var_dump($folder);

