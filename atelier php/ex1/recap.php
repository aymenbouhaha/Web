<?php

$nom=htmlentities($_POST["nom"]);
$prenom=htmlentities($_POST["prenom"]);
$nmb=htmlentities(intval($_POST["nombre"]));
$type=$_POST["type"];
$adresse=htmlentities($_POST["adresse"]);
$ingred=array(
    "harissa" => isset($_POST['harissa']) ? $_POST['harissa'] : null,
    "salad"=> isset($_POST["salade"]) ? $_POST["salade"] : null,
    "mayo"=> isset($_POST["mayonaise"]) ? $_POST["mayonaise"] : null,
);

$upload_dossier = "uploads/";
$imageFileType = strtolower(pathinfo(basename($_FILES['cin']['name']),PATHINFO_EXTENSION));
$random = uniqid() . '.';
$file_name = $random . $imageFileType;
$verification = move_uploaded_file($_FILES['cin']['tmp_name'], $upload_dossier.$file_name);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <p>La commande :</p>
</div>
<div>
    <p>Nom:</p>
    <p> <?php echo $nom?></p>
</div>
<div>
    <p>Prenom:</p>
    <p> <?php echo $prenom?></p>
</div>
<div>
    <p>Adresse:</p>
    <p> <?php echo $adresse?></p>
</div>
<div>
    <p>Nombre des Sandwitch:</p>
    <p> <?php echo $nmb?></p>
</div>
<div>
    <p>Type du Sandwitch:</p>
    <p> <?php echo $type?></p>
</div>
<div>
    <p>Les ingrediants: </p>
    <ul>
        <?php
        foreach ($ingred as $item =>$state)
            if (isset($item)){
                ?>
                <li><?php echo $item ?></li>
            <?php } ?>
    </ul>
</div>
<div>
    <p>Le Prix Total est:</p>
    <p>
        <?php
        if ($nmb>=10)
            echo $nmb*4*0.9;
        else
            echo $nmb*4;
        ?>
    TND</p>
</div>
</body>
</html>
