<?php

class Route {
    private $routeID;
    private $villeDepartID;
    private $villeDestinationID;
    private $distance;
    private $duree;
    private $villeID;

    
    public function __construct($routeID, $villeDepartID, $villeDestinationID, $distance, $duree, $villeID) {
        $this->routeID = $routeID;
        $this->villeDepartID = $villeDepartID;
        $this->villeDestinationID = $villeDestinationID;
        $this->distance = $distance;
        $this->duree = $duree;
        $this->villeID = $villeID;
    }

   
    public function getRouteID() {
        return $this->routeID;
    }

   
    public function setRouteID($routeID) {
        $this->routeID = $routeID;
    }

    
    public function getVilleDepartID() {
        return $this->villeDepartID;
    }

   
    public function setVilleDepartID($villeDepartID) {
        $this->villeDepartID = $villeDepartID;
    }

   
    public function getVilleDestinationID() {
        return $this->villeDestinationID;
    }


    public function setVilleDestinationID($villeDestinationID) {
        $this->villeDestinationID = $villeDestinationID;
    }

    
    public function getDistance() {
        return $this->distance;
    }

   
    public function setDistance($distance) {
        $this->distance = $distance;
    }

    // Getter for Duree
    public function getDuree() {
        return $this->duree;
    }

    // Setter for Duree
    public function setDuree($duree) {
        $this->duree = $duree;
    }

    // Getter for VilleID
    public function getVilleID() {
        return $this->villeID;
    }

    // Setter for VilleID
    public function setVilleID($villeID) {
        $this->villeID = $villeID;
    }
}

?>
