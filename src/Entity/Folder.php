<?php
    namespace Candidature\Entity;

class Folder {
    private $surname;
    private $firstname;
    private $candidateDate;
    private $career;
    private $phoneNumber;
    private $email;
    private $state;
    private $folderNumber;

    /**
     * @return mixed
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname) {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getCandidateDate() {
        return $this->candidateDate;
    }

    /**
     * @param mixed $candidateDate
     */
    public function setCandidateDate($candidateDate) {
        $this->candidateDate = $candidateDate;
    }

    /**
     * @return mixed
     */
    public function getCareer() {
        return $this->career;
    }

    /**
     * @param mixed $career
     */
    public function setCareer($career) {
        $this->career = $career;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state) {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getFolderNumber() {
        return $this->folderNumber;
    }

    /**
     * @param mixed $folderNumber
     */
    public function setFolderNumber($folderNumber) {
        $this->folderNumber = $folderNumber;
    }




}