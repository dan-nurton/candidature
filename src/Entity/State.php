<?php


namespace Candidature\Entity;


class State {
    private $test = [];
    private $interview = [];
    private $candidatureState = [];

    /**
     * @return array
     */
    public function getTest() {
        return $this->test;
    }

    /**
     * @param array $test
     */
    public function setTest($test) {
        $this->test = $test;
    }

    /**
     * @return array
     */
    public function getInterview() {
        return $this->interview;
    }

    /**
     * @param array $interview
     */
    public function setInterview($interview) {
        $this->interview = $interview;
    }

    /**
     * @return array
     */
    public function getCandidatureState() {
        return $this->candidatureState;
    }

    /**
     * @param array $candidatureState
     */
    public function setCandidatureState($candidatureState) {
        $this->candidatureState = $candidatureState;
    }
}