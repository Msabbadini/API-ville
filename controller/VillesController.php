<?php

require "models/VilleManager.class.php";


class VillesController
{
    private $VilleManager;

    public function __construct()
    {
        $this->VilleManager = new VilleManager();
        $this->VilleManager->LoadVilles();
    }

    /** fontion appelée par la route /allusers */
    public function AllVilles()
    {
        // on récupère le tableau des utilisateurs dans une variable $users
        $villes = $this->VilleManager->LoadVilles() ;
        // print_r($villes);
        // et on charge la vue qui utilisera $users
        require_once "views/villes.php";
    }
	
    public function display_departement($zip){
        $villes = $this->VilleManager->loadDepartement($zip);
        require_once "views/departement.php";
    }
	/** fontion appelée par la route /user/(:number) */
    public function display_ville($zip)
    {
       $villes= $this->VilleManager->loadVille($zip) ;
        // on récupère l'utilisateur depuis le manager
        // et on charge la vue qui utilisera $user
        require_once "views/ville.php";
    }

    public function display_Uville($zip){
        $villes = $this->VilleManager->loadUVille($zip);
        require_once "views/update.php";
    }
    public function display_canton($zipD,$zipC){
        $villes = $this->VilleManager->loadCanton($zipD,$zipC);
        require_once "views/canton.php";
    }

    public function display_population($zip){
        $villes = $this->VilleManager->loadPopulation($zip);
        require_once "views/population.php";
    }

    public function display_superficie($zip){
        $villes = $this->VilleManager->loadSuperficie($zip);
        require_once "views/superficie.php";
    }

    public function index(){
        require_once 'views/index.php';
    }
}



?>