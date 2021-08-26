<!DOCTYPE HTML>
<html>
<?php require_once "views/common/header.php"; ?>
<body class='is-preload'>
<?php require_once 'views/common/navbar.php'; ?>
    <div id='wrapper'>
        <section id='main' class='wrapper'>
            <div class='inner'>
                <h1 class='major'>Listes de toutes les Villes</h1>
                    <div>
                        <table class='table-wrapper'>
                            <thead>
                            <tr>
                                <th>Departement</th>
                                <th>Nom</th>
                                <th>Code postal</th>
                                <th>canton</th>
                                <th>population</th>
                                <th>densite</th>
                                <th>surface</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($villes as $ville){
                                ?>
                            <tr>
                                <td><?= $ville->departement?></td>
                                <td><?= $ville->nom ?></td>
                                <td><?= $ville->code_postal ?></td>
                                <td><?= $ville->canton ?></td>
                                <td><?= $ville->population ?></td>
                                <td><?= $ville->densite ?></td>
                                <td><?= $ville->surface ?></td>
                            </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </section>
    </div>
<?php require_once "views/common/footer.php";?>
</body>
</html>