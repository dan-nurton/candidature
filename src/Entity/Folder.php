<?php
    namespace Candidature\Entity;

class Folder {
    private $lastName;
    private $firstName;
    private $folderCreation;
    private $career;
    private $phoneNumber;
    private $mail;
    private $state = 0;
    
    function __construct($datas) {
       
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
    function getLastName() {
        return $this->lastName;
    }

    function getFirstName() {
        return $this->firstname;
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

    function getState() {
        return $this->state;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setFirstName($firstname) {
        $this->firstname = $firstname;
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

    function setState($state) {
        $this->state = $state;
    }

}