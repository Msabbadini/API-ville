<!-- Fichier Routage -->
<?php
session_start();
// url de recup la totalité
//  localhost/france -> adresse que l'utilisateur verra
// localhost/france.php?action=all -> affiche la totalité des villes
// *** url ville GET
// france/ville/{code_postal}

// ** url population GET
// france/population/{code_postal}

// ** url superficie GET
// superficie/{code_postal}

// ** url villes departement GET
// france/villes/{code_departement}

// **url villes canton GET
// villes/{code_departement}/{numero_canton}-> url pour User
// villes.php?id_departement=83&id_canton=12 -> url pour le serveur

// ** url ville update POST
// ville/{code_postal}/update

// ******* Config ******
define("URL", str_replace("france.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
define("FULL_URL", str_replace("france.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]/{$_SERVER['REQUEST_URI']}"));

// ******** Require/includes ********
require_once 'controller/VillesController.php';

try{
      if($_GET['action']){
        $url = explode('/',filter_var($_GET['action'],FILTER_SANITIZE_URL));
        switch($url[0])
        {
            case 'france':
                $controller= new VillesController();
                $controller-> index();        
                break;
            case 'villes':
                if(!empty($url[1])){
                    if(!empty($url[2])){
                        $controller = new VillesController();
                        $controller ->display_canton($url[1],$url[2]);
                    }else{
                        $controller = new VillesController();
                        $controller ->display_villes($url[1]);
                    }
                }else{
                    echo ('Veulliez indiquer un code postal comme  villes/83300.');  
                    $controller = new VillesController();
                    $controller -> AllVilles();          
                }
                break;
            case 'ville':
                if(!empty($url[1])){
                    if(!empty($url[2]) && strtolower($url[2]) === 'update'){
                        $controller = new VillesController();
                        $controller ->display_Uville($url[1]);
                    }else{
                        $controller = new VillesController();
                        $controller ->display_ville($url[1]);
                    }
                }else{
                    throw new Exception ('Veuillez indiquer un Code Postal');
                }
                break;
            case 'population':
                if(!empty($url[1])){
                    $controller = new VillesController();
                    $controller ->display_population($url[1]);
                }else{
                    throw new Exception('Veuillez indiquer un Code Postal');
                }
                break;
            case 'superficie':
                if(!empty($url[1])){
                    $controller = new VillesController();
                    $controller->display_superficie($url[1]);
                }else{
                    throw new Exception ('Veuillez indiquer un Code Postal');
                }
                break;
            default: throw new Exception ('Problème de récupération de données. A venir tableau avec les commandes');
        }
    }else{
        $controller= new VillesController();
        $controller-> index();
    }  
}catch(Exception $e){
    $erreur =[
       "message"=> $e->getMessage(),
       'code'=> $e->getCode()
    ];
    print_r($erreur);
}




?>