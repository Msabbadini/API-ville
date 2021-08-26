<!DOCTYPE HTML>
<html>
<?php
if(isset($_POST['modifier'])){
    $id=$_POST['id'];
    $departement=htmlspecialchars($_POST['departement']);
    $nom=htmlspecialchars($_POST['nom']);
    $zip=htmlspecialchars($_POST['zip']);
    $canton=htmlspecialchars($_POST['canton']);
    $densite=(int)$_POST['densite'];
    $population=htmlspecialchars($_POST['population']);
    $surface=htmlspecialchars($_POST['surface']);
    
    $data=[
        'departement'=>$departement,
        'nom'=>$nom,
        'code_postal'=>$zip,
        'canton'=>$canton,
        'densite'=>$densite,
        'population'=>$population,
        'surface'=>$surface
    ];
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,'http://localhost/loutre/api/ville/'.$zip.'/update/'.$id);
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

    $response = curl_exec($ch);
    // var_dump($response);
    echo $response;
    if(!$response){
        return false;
    }
    header('Refresh:1');
}
?>
<body>
    <div>
        <section>
            <div>
                <h1>Mis a jour des données</h1>
                    <div>
        <?php 
            foreach($villes as $ville){
        ?>
    <form action="" method="POST">
        <label for="">N°ID</label>
                <input type="text" name='id' value='<?=$ville->id?>' readonly>
        <label for="">Departement</label>
            <input type="text" name='departement' value="<?= $ville->departement?>">
        <label for="">Nom de la ville</label>
            <input type="text" name='nom' value="<?= $ville->nom?>">
        <label for="">Code postal</label>
            <input type="text" name='zip' value="<?= $ville->code_postal?>">
        <label for="">Canton</label>
            <input type="text" name='canton' value='<?=$ville->canton?>'>
        <label for="">Population</label>
                <input type="text" name='population' value='<?=$ville->population?>'>
        <label for="">Densite</label>
                <input type="number" name='densite' value='<?=$ville->densite?>'>
        <label for="">Surface</label>
                <input type="number" name='surface' value='<?=$ville->surface?>'>
        <input type="submit" name='modifier' value="Modifier">
                        </form>
                        <?php } ?>
                    </div>
            </div>
        </section>
    </div>
</body>
</html>