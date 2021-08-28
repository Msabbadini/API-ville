<?php
session_start();
// Création de deux constantes URL et FULL_URL qui pourront servir dans les controlleurs et/ou vues
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
define("FULL_URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]/{$_SERVER['REQUEST_URI']}"));

require_once 'controller/VillesController.php';
$index ='';
try{
    if($_GET['page']){
        $url = explode('/',filter_var($_GET['page'],FILTER_SANITIZE_URL));
        switch($url[0]){
            case 'france':
                $controller = new VillesController();
                $controller->index();
                break;
            case 'villes':
                if(!empty($url[2])){
                        $controller = new VillesController();
                        $controller->display_canton($url[1],$url[2]);
                }else{
                    $controller = new VillesController();
                    $controller->display_departement($url[1]);
            }
                break;
            case 'ville':
                if(!empty($url[1])){
                    if(!empty($url[2]) && strtolower($url[2]) === 'update'){
                        $controller = new VillesController();
                        $controller -> display_Uville($url[1]);
                    }
                    $controller = new VillesController();
                    $controller->display_ville($url[1]);
                }else{
                     echo ' Veuillez indiquer un code postal';
                }
                break;
            case 'population':
                if(!empty($url[1])){
                    $controller = new VillesController();
                    $controller->display_population($url[1]);
                }else{
                    echo ' veuillez indiquer un code postal';
                }
                break;
            case 'superficie':
                if(!empty($url[1])){
                    $controller = new VillesController();
                    $controller ->display_superficie($url[1]);
                }else{
                    echo ' Veuillez indiquer un code postal';
                    
                }
                break;
            case 'densite':
                if(!empty($url)){
                    $controller = new VillesController();
                    $controller->display_densite($url[1]);
                }
                break;
            default:
                    throw new Exception('La page n\'existe pas');
        }
    }else{
        $controller = new VillesController();
        $controller->index();
    }
}catch(Exception $e){
    $erreur =[
        "message"=> $e->getMessage(),
        'code'=> $e->getCode()
     ];
     print_r($erreur); 
}

