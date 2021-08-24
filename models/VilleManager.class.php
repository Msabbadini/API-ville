<?php
require_once 'Ville.class.php';
require_once 'connexion.class.php';

Class VilleManager extends DB
{
    private $villes;
    
    // Charge toutes les villes
    public function LoadVilles(){
        $req = $this->getDatabase()->prepare("SELECT * FROM villes_france ORDER BY code_postal");
        $req->execute();
        $villes = $req->fetchAll();
        $req->closeCursor();
        return json_encode($villes);
        
    }
    // Charge  les villes d'un département
    public function loadDepartement($zip){
        $req = $this->getDatabase()->prepare("SELECT * FROM villes_france WHERE departement = ? ORDER BY code_postal");
        $req->execute([$zip]);
        $villes = $req->fetchAll();
        $req->closeCursor();
        return json_encode($villes);
    }
    // Charge une ville selon zip
    public function loadVille($zip){
        $req = $this->getDatabase()->prepare("SELECT * FROM villes_france WHERE code_postal LIKE ?");
        $req->execute(array($zip."%"));
        $villes = $req->fetchAll();
        $req->closeCursor();
        return json_encode($villes);
        // foreach($villes as $ville){
        //     $new_ville = new Ville(
        //         $ville['id'],$ville['departement'],$ville['nom'],$ville['code_postal'],$ville['canton'],$ville['population'],$ville['densite'],$ville['surface']
        //     );
        //     $this->addVille($new_ville);
        // }
    }

    public function loadPopulation($zip){
        $req = $this->getDatabase()->prepare("SELECT * FROM villes_france WHERE code_postal LIKE ?");
        $req->execute([$zip."%"]);
        $villes = $req->fetchAll();
        $req->closeCursor();
        return json_encode($villes);
    }

    public function loadSuperficie($zip){
        $req = $this->getDatabase()->prepare("SELECT * FROM villes_france WHERE code_postal LIKE ?");
        $req->execute([$zip."%"]);
        $villes = $req->fetchAll();
        $req->closeCursor();
        return json_encode($villes);
    }

    public function loadCanton($zipD,$zipC){
        $req = $this->getDatabase()->prepare("SELECT * FROM villes_france WHERE departement = ? AND canton = ?");
        $req->execute([$zipD,$zipC]);
        $villes = $req->fetchAll();
        $req->closeCursor();
        return json_encode($villes);
    }

    public function loadUVille($zip){
        $req = $this->getDatabase()->prepare("SELECT * FROM villes_france WHERE code_postal LIKE ?");
        $req->execute(array($zip."%"));
        $villes = $req->fetchAll();
        $req->closeCursor();
        return json_encode($villes);

    }
}

?>