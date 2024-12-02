<?php
abstract class Immobilier{
    protected $reference;
    protected $propriétaire;
    protected $localité;
    protected $surface;
    protected $nbPieces;
    protected $domaineUsage;

    /**
     * Get the value of reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     */
    public function setReference($reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of propriétaire
     */
    public function getPropriétaire()
    {
        return $this->propriétaire;
    }

    /**
     * Set the value of propriétaire
     */
    public function setPropriétaire($propriétaire): self
    {
        $this->propriétaire = $propriétaire;

        return $this;
    }

    /**
     * Get the value of localité
     */
    public function getLocalité()
    {
        return $this->localité;
    }

    /**
     * Set the value of localité
     */
    public function setLocalité($localité): self
    {
        $this->localité = $localité;

        return $this;
    }

    /**
     * Get the value of surface
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     */
    public function setSurface($surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get the value of nbPieces
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * Set the value of nbPieces
     */
    public function setNbPieces($nbPieces): self
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get the value of domaineUsage
     */
    public function getDomaineUsage()
    {
        return $this->domaineUsage;
    }

    /**
     * Set the value of domaineUsage
     */
    public function setDomaineUsage($domaineUsage): self
    {
        $this->domaineUsage = $domaineUsage;

        return $this;
    }
}
