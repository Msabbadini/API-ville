<?php
require_once 'connexion.class.php';
class Ville extends DB{
    private $id;
    private $departement; 
    private $ville;
    private $zip;
    private $canton;
    private $population;
    private $densite;
    private $surface;

    public function __construct($id,$departement,$ville,$zip,$canton,$population,$densite,$surface)
    {
        $this->id = $id;
        $this->departement = $departement;
        $this->ville = $ville;
        $this->zip = $zip;
        $this->canton = $canton;
        $this->population = $population;
        $this->densite = $densite;
        $this->surface = $surface;
    }

// *********************************
    public function getId(){
        return $this->id;
    }
    public function setId($id) : void{
        $this->id = $id;
    }
// *********************************

    public function getDep()
    {
        return $this->departement;
    }

    public function setDep($departement) : void
    {
        $this->departement = $departement;
    }

 // *********************************

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville) : void
    {
        $this->ville = $ville;
    }

 // **********************************

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($zip) : void
    {
        $this->zip = $zip;
    }

// *********************************

    public function getCanton()
    {
        return $this->canton;
    }

    public function setCanton($canton) : void
    {
        $this->canton = $canton;
    }

// *********************************

    public function getPop()
    {
        return $this->population;
    }

    public function setPop($population) : void
    {
        $this->population = $population;
    }

// *********************************

    public function getDensite()
    {
        return $this->densite;
    }

    public function setDensite($densite) : void
    {
        $this->densite = $densite;
    }

// *********************************

    public function getSurface()
    {
        return $this->surface;
    }

    public function setSurface($surface) : void
    {
        $this->surface = $surface;
    }
}


?>