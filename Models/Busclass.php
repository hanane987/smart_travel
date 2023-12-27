 <?php 
 


 class Bus {
     private $busID;
     private $numeroBus;
     private $plaqueImmatriculation;
     private $entreprise;
     private $capacite;
     private $companyID;
 
     // Constructor
     public function __construct($busID, $numeroBus, $plaqueImmatriculation, $entreprise, $capacite, $companyID) {
         $this->busID = $busID;
         $this->numeroBus = $numeroBus;
         $this->plaqueImmatriculation = $plaqueImmatriculation;
         $this->entreprise = $entreprise;
         $this->capacite = $capacite;
         $this->companyID = $companyID;
     }
 
     // Getters
     public function getBusID() {
         return $this->busID;
     }
 
     public function getNumeroBus() {
         return $this->numeroBus;
     }
 
     public function getPlaqueImmatriculation() {
         return $this->plaqueImmatriculation;
     }
 
     public function getEntreprise() {
         return $this->entreprise;
     }
 
     public function getCapacite() {
         return $this->capacite;
     }
 
     public function getCompanyID() {
         return $this->companyID;
     }
 
     // Setters
     public function setBusID($busID) {
         $this->busID = $busID;
     }
 
     public function setNumeroBus($numeroBus) {
         $this->numeroBus = $numeroBus;
     }
 
     public function setPlaqueImmatriculation($plaqueImmatriculation) {
         $this->plaqueImmatriculation = $plaqueImmatriculation;
     }
 
     public function setEntreprise($entreprise) {
         $this->entreprise = $entreprise;
     }
 
     public function setCapacite($capacite) {
         $this->capacite = $capacite;
     }
 
     public function setCompanyID($companyID) {
         $this->companyID = $companyID;
     }
 }
 
 
?>