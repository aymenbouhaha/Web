<?php
$erreur="";
if (isset($_POST["eval"]) && !isset($_COOKIE["eval"])){
    $data=$_POST["eval"];
    setcookie("eval",$data,time()+60*2);
}elseif (isset($_POST["eval"]) && isset($_COOKIE["eval"])){
    $erreur="Vous avez voter et vous avez choisit ".$_COOKIE["eval"];
}
//setcookie("eval","tt",time()-1);
//var_dump($_COOKIE);
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
<div class="vote">
    <form action="cookies.php" method="POST">
        <div>
            <label for="bon">Bon</label>
            <input type="radio" name="eval" id="bon" value="bon"></div>
        <div>
            <label for="moyen">Moyen</label>
            <input type="radio" name="eval" id="moyen" value="moyen">
        </div>
        <div>
            <label for="mauvais">mauvais</label>
            <input type="radio" name="eval" id="mauvais" value="mauvais">
        </div>
        <div class="submit">
            <input type="submit" >
        </div>
        <div>
            <p><?php echo $erreur ?></p>
        </div>
    </form>
</div>
</body>
</html>
