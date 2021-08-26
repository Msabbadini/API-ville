<!DOCTYPE html>
<html lang="en">
<?php require_once "views/common/header.php" ?> 
<body class='is-preload'>
    <H1>Listes des commandes de l'api</H1>

    <p>Dans la barre de recherche vous avez plusieurs possibilités pour utiliser l'API, voici une liste des commandes</p>
    <ul>
        <li>villes/{code du département}</li>
        <p>Exemple villes/83 => vous obtiendrez la liste des villes du département 83</p>
        <li>/villes/{code du département}/{code du canton}</li>
    </ul>
</body>
</html>