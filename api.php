<?php
require_once 'modeles/connexion.class.php';
// Envoie de la totalité de la BDD
    function getAllVilles(){
        echo 'loutre du bonheur';
    }

// Prends le code departemental
    function getVilles($zip_departement){
        $pdo= getDB();
        $req = "SELECT * FROM villes_france WHERE departement =?";
        $stmt = $pdo->prepare($req);
        $stmt -> execute([$zip_departement]);
        $villes_departement= $stmt->fetchAll();
        return $villes_departement;
    }

// Prends le code postal
    function getVille($zip){
        $pdo= getDB();
        $req = 'SELECT * FROM villes_france WHERE code_postal=?';
        $stmt = $pdo->prepare($req);
        $stmt -> execute([$zip]);
        $ville = $stmt->fetchAll();
        return $ville;


    }

// Prends le code Postal
    function getSuperficie($zip){
        $pdo= getDB();
        $req="SELECT nom,densite FROM villes_france WHERE code_postal=?";
        $stmt=$pdo->prepare($req);
        $stmt->execute([$zip]);
        $code_postal=$stmt->fetchAll();
        return $code_postal;

    }

// Prends le code departemental et le n° canton
    function getCanton($zip_departement,$zip_canton){
        $pdo= getDB();
        $req= 'SELECT * FROM villes_france WHERE departement=? AND canton=?';
        $stmt=$pdo->prepare($req);
        $stmt->execute([$zip_departement,$zip_canton]);
        $canton= $stmt->fetchAll();
        return $canton;
    }

// Prends le code postal
    function getPopulation($zip){
        $pdo= getDB();
        $req='SELECT nom , population FROM villes_france WHERE code_postal=?';
        $stmt=$pdo->prepare($req);
        $stmt->execute([$zip]);
        $size=$stmt->fetchAll();
        return $size;

        
    }
    //  Prends le codepostal avec /update
    function updateVille(){
        $pdo= getDB();

        
    }

    function getDB(){
        $this->getDatabase();
    }
?>