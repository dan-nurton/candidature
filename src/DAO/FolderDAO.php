<?php

namespace Candidature\DAO;

use Candidature\Entity\Folder;

class FolderDAO {
    private $database;
    private $folder;
    
    
  

    /**
     * FolderDAO constructor.
     * @param $database
     */
    public function __construct($database)
    {
        $this->database = $database;
    }


    public function insertData($folder)
    {
        $db = $this->database;
        $q = $db->prepare('INSERT INTO folder VALUES (:lastname, :firstname, :folderCreation, :career, :phoneNumber, :mail, :state)');
        $q->bindValue(':lastname', $folder->)
    }

    public function getData()
    {
        $db = $this->database;
        $q = $db->prepare('SELECT * FROM folder');
        $q->execute();
    }


}