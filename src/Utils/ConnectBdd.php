<?php

namespace Candidature\Utils;

use PDOException;
use PDO;

class ConnectBdd {
    public function connect(){
        try{

            $bdd =  new PDO('mysql:host=localhost;dbname=adrarcandidature;charset=utf8',
                'root',
                '',
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }
        catch (PDOException $e){
            die('Erreur : '.$e->getMessage());
        }

        return $bdd;
    }
}