<?php
require_once "../../model/Immobilier.php";
class Appartement extends Immobilier{
    private $SurfaceEspaceCommun;

    function __construct($ref, $prop, $loc, $surf, $NbP, $DomaineU, $surfC){
        $this->reference = $ref;
        $this->propriétaire = $prop;
        $this->localité = $loc;
        $this->surface = $surf;
        $this->nbPieces = $NbP;
        $this->domaineUsage = $DomaineU;
        $this->SurfaceEspaceCommun = $surfC;
        
    }


    /**
     * Get the value of SurfaceEspaceCommun
     */
    public function getSurfaceEspaceCommun()
    {
        return $this->SurfaceEspaceCommun;
    }


    /**
     * Set the value of SurfaceEspaceCommun
     */
    public function setSurfaceEspaceCommun($SurfaceEspaceCommun): self
    {
        $this->SurfaceEspaceCommun = $SurfaceEspaceCommun;

        return $this;
    }
}