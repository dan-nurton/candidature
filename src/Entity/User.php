<?php
    namespace Candidature\Entity;

class User {
    private $identifier;
    private $folder;
    
    
    
    
    

    /**
     * @return mixed
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * @param mixed $identifier
     */
    public function setIdentifiant($identifier) {
        $this->identifier = $identifier;
    }
}