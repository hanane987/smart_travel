<?php

class Company {
    private $companyID;
    private $img;
    private $companyName;

    // Constructor
    public function __construct($companyID, $img, $companyName) {
        $this->companyID = $companyID;
        $this->img = $img;
        $this->companyName = $companyName;
    }

    // Getter for companyID
    public function getCompanyID() {
        return $this->companyID;
    }

    // Setter for companyID
    public function setCompanyID($companyID) {
        $this->companyID = $companyID;
    }

    // Getter for img
    public function getImg() {
        return $this->img;
    }

    // Setter for img
    public function setImg($img) {
        $this->img = $img;
    }

    // Getter for companyName
    public function getCompanyName() {
        return $this->companyName;
    }

    // Setter for companyName
    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
    }
}

?>
