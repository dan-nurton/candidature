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

    function setCandidacyFolder($candidacyFolder) {
        $this->candidacyFolder = $candidacyFolder;
    }

    function setTest($test) {
        $this->test = $test;
    }

    function setInterview($interview) {
        $this->interview = $interview;
    }

    function setCandidacyAccepted($candidacyAccepted) {
        $this->candidacyAccepted = $candidacyAccepted;
    }

    function setCandidacyRefused($candidacyRefused) {
        $this->candidacyRefused = $candidacyRefused;
    }


    
    
}