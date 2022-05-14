<?php
session_start();
if (!isset($_SESSION["notes"]))
{
    $_SESSION["notes"]=array();
}
if (isset($_POST["titre"])){
    $donne=$_POST["titre"]."#".$_POST["note"];
    $_SESSION["notes"][count($_SESSION["notes"])]=$donne;
}

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
<div class="form">
    <form action="index.php" method="POST">
        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre" placeholder="Titre" id="titre">
        </div>
        <div>
            <label for="note">Note</label>
            <textarea placeholder="saisir la note" id="note" name="note"></textarea>
        </div>
        <div class="submit">
            <input type="submit">
        </div>
    </form>
</div>
<a href="deconnect.php">Se deconnecter</a>
<div class="note">
    <?php
        foreach ($_SESSION["notes"] as $data)
        {
    ?>
        <p> <?php echo $data?></p>

    <?php }?>
</div>
</body>
</html>