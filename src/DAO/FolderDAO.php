<?php

namespace Candidature\DAO;

use Candidature\Entity\Folder;

class FolderDAO {
    private $database;

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
        $q->bindValue(':lastname', $folder->getLastName());
        $q->bindValue(':firstname', $folder->getFirsName());
        $q->bindValue(':folderCreation', $folder->getFolderCreation());
        $q->bindValue(':career', $folder->getCareer());
        $q->bindValue(':phoneNumber', $folder->getPhoneNumber());
        $q->bindValue(':mail', $folder->getMail());
        $q->bindValue(':state', $folder->getState());
        $q->execute();
        $q->closeCursor();

    }

    public function getData()
    {
        $db = $this->database;
        $q = $db->prepare('SELECT * FROM folder');
        $q->execute();
        $q->closeCursor();
    }


}