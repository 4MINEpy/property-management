<?php
require_once "../../model/Immobilier.php";
class Villa extends Immobilier{
    private $nbEtage;

    function __construct($ref, $prop, $loc, $surf, $NbP, $DomaineU, $nbe){
        $this->reference = $ref;
        $this->propriétaire = $prop;
        $this->localité = $loc;
        $this->surface = $surf;
        $this->nbPieces = $NbP;
        $this->domaineUsage = $DomaineU;
        $this->nbEtage = $nbe;
        
    }

    /**
     * Get the value of nbEtage
     */
    public function getNbEtage()
    {
        return $this->nbEtage;
    }
}