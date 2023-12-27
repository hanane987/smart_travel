<?php

class Horaire {
    private $horaireID;
    private $date;
    private $heureDepart;
    private $heureArrivee;
    private $siegesDisponibles;
    private $busID;
    private $routeID;

 
    public function __construct($horaireID, $date, $heureDepart, $heureArrivee, $siegesDisponibles, $busID, $routeID) {
        $this->horaireID = $horaireID;
        $this->date = $date;
        $this->heureDepart = $heureDepart;
        $this->heureArrivee = $heureArrivee;
        $this->siegesDisponibles = $siegesDisponibles;
        $this->busID = $busID;
        $this->routeID = $routeID;
    }

    
    public function getHoraireID() {
        return $this->horaireID;
    }


    public function setHoraireID($horaireID) {
        $this->horaireID = $horaireID;
    }

    public function getDate() {
        return $this->date;
    }

    
    public function setDate($date) {
        $this->date = $date;
    }

    // Getter for HeureDepart
    public function getHeureDepart() {
        return $this->heureDepart;
    }

    // Setter for HeureDepart
    public function setHeureDepart($heureDepart) {
        $this->heureDepart = $heureDepart;
    }

    // Getter for HeureArrivee
    public function getHeureArrivee() {
        return $this->heureArrivee;
    }

    // Setter for HeureArrivee
    public function setHeureArrivee($heureArrivee) {
        $this->heureArrivee = $heureArrivee;
    }

    // Getter for SiegesDisponibles
    public function getSiegesDisponibles() {
        return $this->siegesDisponibles;
    }

    // Setter for SiegesDisponibles
    public function setSiegesDisponibles($siegesDisponibles) {
        $this->siegesDisponibles = $siegesDisponibles;
    }

    // Getter for BusID
    public function getBusID() {
        return $this->busID;
    }

    // Setter for BusID
    public function setBusID($busID) {
        $this->busID = $busID;
    }

    // Getter for RouteID
    public function getRouteID() {
        return $this->routeID;
    }

    // Setter for RouteID
    public function setRouteID($routeID) {
        $this->routeID = $routeID;
    }
}

?>
