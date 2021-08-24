<!DOCTYPE HTML>
<html>
<?php
if(isset($_POST['departement'])){
    echo $_POST['departement'];
}
?>
<body>
    <div>
        <section>
            <div>
                <h1>Mis a jour des données</h1>
                    <div>
                            <?php 
                            $result = json_decode($villes,true);
                            foreach($result as $ville){
                                ?>
                        <form action="" method="POST">
                            <label for="">Departement</label>
                            <input type="text" name='departement' value="<?= $ville['departement']?>">
                            <label for="">Nom de la ville</label>
                            <input type="text" value="<?= $ville['nom']?>">
                            <label for="">Code postal</label>
                            <input type="text" value="<?= $ville['code_postal']?>">
                            <input type="submit" value="Modifier">
                        </form>
                        <?php } ?>
                    </div>
            </div>
        </section>
    </div>
</body>
</html>