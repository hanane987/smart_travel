<?php

class Ville {
    private $villeID;
    private $villeName;

    public function __construct($villeID, $villeName) {
        $this->villeID = $villeID;
        $this->villeName = $villeName;
    }

    
    public function getVilleID() {
        return $this->villeID;
    }

    public function setVilleID($villeID) {
        $this->villeID = $villeID;
    }

    public function getVilleName() {
        return $this->villeName;
    }

    public function setVilleName($villeName) {
        $this->villeName = $villeName;
    }
}

?>
