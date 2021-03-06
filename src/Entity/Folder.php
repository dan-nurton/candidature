<?php
   namespace Candidature\Entity;

class Folder {
    private $lastName;
    private $firstName;
    private $folderCreation;
    private $career;
    private $phoneNumber;
    private $mail;
    private $idState = 1;
    private $login;

    
    function __construct($datas,$login) {
         $this->setLogin($login);
         foreach ($datas as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set' . ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }
    function getLogin() {
        return $this->login;
    }

    function setLogin($login) {
        $this->login = $login;
    }

        function getLastName() {
        return $this->lastName;
    }
    function getUser() {
        return $this->user;
    }

    function setUser($user) {
        $this->user = $user;
    }

        function getFirstName() {
        return $this->firstName;
    }

    function getFolderCreation() {
        return $this->folderCreation;
    }

    function getCareer() {
        return $this->career;
    }

    function getPhoneNumber() {
        return $this->phoneNumber;
    }

    function getMail() {
        return $this->mail;
    }

    function getIdState() {
        return $this->idState;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setFolderCreation($folderCreation) {
        $this->folderCreation = $folderCreation;
    }

    function setCareer($career) {
        $this->career = $career;
    }

    function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setIdState($idState) {
        $this->idState = $idState;
    }
}
