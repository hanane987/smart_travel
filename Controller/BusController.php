<?php

class BusController{
     public function getAllBus(){
    $Bus = Bus::getAll();
    return $Bus;

     }
}



?>