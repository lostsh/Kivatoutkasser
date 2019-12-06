<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Ressources.css">
    <title>Inscritpion</title>
</head>
<?php
session_start();
include ("db.php");
?>
<div>
<form method="get">
    Les Mots Clés :
    <!--<SELECT name="id" size="1">-->
    <?php
    $sql = "SELECT Nom, id_MC FROM MotCle";
    $query = $pdo->query($sql);
    ?><SELECT name="id" size="1"><?php
    foreach ($query as $row) {
        echo "<option value=\"".$row['id_MC']."\">".$row['Nom']."</option>";
    }
    ?>
    </select>
    <input type="submit" />
</form>
</div>
<div>
<?php
    if(isset($_GET['id'])){
        $sql = "SELECT description, lien, nom FROM Ressouce INNER JOIN PossederMotClé ON PossederMotClé.IdR = Ressouce.idR WHERE PossederMotClé.Id_MC = ".$_GET['id'];
        $query = $pdo->query($sql);
        foreach ($query as $row) {
            echo "<br>";
            echo"<a href=\"".$row['lien']."\">".$row['nom']."</a><br>";
            echo" description : ".$row['description'];
        }
    }
?>
</div>
