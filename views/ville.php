<!DOCTYPE HTML>
<html>
<body>
    <div>
        <section>
            <div>
                <h1>Listes de toutes les Villes</h1>
                    <div>
                        <table>
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
</body>
</html>