<?php


namespace Candidature\Entity;


class State {
    private $candidacyFolder = false;
    private $test = false;
    private $interview = false;
    private $candidacyAccepted = false;
    private $candidacyRefused = false;
    
    
    function getCandidacyFolder() {
        return $this->candidacyFolder;
    }

    function getTest() {
        return $this->test;
    }

    function getInterview() {
        return $this->interview;
    }

    function getCandidacyAccepted() {
        return $this->candidacyAccepted;
    }

    function getCandidacyRefused() {
        return $this->candidacyRefused;
    }

    function setCandidacyAccepted($candidacyAccepted) {
        $this->candidacyAccepted = $candidacyAccepted;
    }

    /**
     * @return bool
     */
    public function isCandidacyFolder() {
        return $this->candidacyFolder;
    }

    /**
     * @param bool $candidacyFolder
     */
    public function setCandidacyFolder($candidacyFolder) {
        $this->candidacyFolder = $candidacyFolder;
    }

    /**
     * @return bool
     */
    public function isTest() {
        return $this->test;
    }

    /**
     * @param bool $test
     */
    public function setTest($test) {
        $this->test = $test;
    }

    /**
     * @return bool
     */
    public function isInterview() {
        return $this->interview;
    }

    /**
     * @param bool $interview
     */
    public function setInterview($interview) {
        $this->interview = $interview;
    }

    /**
     * @return bool
     */
    public function isCandidacyAccept() {
        return $this->candidacyAccept;
    }

    /**
     * @param bool $candidacyAccept
     */
    public function setCandidacyAccept($candidacyAccept) {
        $this->candidacyAccept = $candidacyAccept;
    }

    /**
     * @return bool
     */
    public function isCandidacyRefused() {
        return $this->candidacyRefused;
    }

    /**
     * @param bool $candidacyRefused
     */
    public function setCandidacyRefused($candidacyRefused) {
        $this->candidacyRefused = $candidacyRefused;
    }
}