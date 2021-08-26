<?php
require_once 'Ville.class.php';
require_once 'connexion.class.php';
// api
Class VilleManager extends DB
{
    private $villes;
    
    // Charge toutes les villes
    public function LoadVilles(){
        $villes =json_decode(file_get_contents('http://localhost/loutre/api/france'));
        return $villes;
    }
    // Charge  les villes d'un département
    public function loadDepartement($zip){
        $villes = json_decode(file_get_contents('http://localhost/loutre/api/villes/'.$zip));
        return $villes;
    }
    // Charge une ville selon zip
    public function loadVille($zip){
        $villes = json_decode(file_get_contents('http://localhost/loutre/api/ville/'.$zip));
        return $villes;
   }

    public function loadPopulation($zip){
        $villes = json_decode(file_get_contents('http://localhost/loutre/api/population/'.$zip));
        return $villes;
   }

    public function loadSuperficie($zip){
        $villes = json_decode(file_get_contents('http://locahost/loutre/api/superficie/'.$zip));
        return $villes;
   }

    public function loadCanton($zipD,$zipC){
        $villes = json_decode(file_get_contents('http://localhost/loutre/api/'.$zipD.'/'.$zipC));
        return $villes;
   }

    public function loadUVille($zip){
        $villes = json_decode(file_get_contents('http://localhost/loutre/api/ville/'.$zip));
        return $villes;
    }

    public function UpdateVille($zip,$id){

    }
}

?>