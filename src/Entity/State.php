<?php


namespace Candidature\Entity;


class State {
    private $candidacyFolder = false;
    private $test = false;
    private $interview = false;
    private $candidacyAccepteed = false;
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

    function getCandidacyAccepteed() {
        return $this->candidacyAccepteed;
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

    function setCandidacyAccepteed($candidacyAccepteed) {
        $this->candidacyAccepteed = $candidacyAccepteed;
    }

    function setCandidacyRefused($candidacyRefused) {
        $this->candidacyRefused = $candidacyRefused;
    }


    
    
}