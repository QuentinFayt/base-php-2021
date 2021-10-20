<?php
// il doit y exister l'id ET il doit être numérique int positif ET ce n'est pas 0
if(isset($_GET['id'])&&ctype_digit($_GET['id'])&&!empty($_GET['id'])){

    // transtypage de string to int
    $idarticle = (int) $_GET['id'];

    // requête
    $sql="SELECT a.idthearticle, a.thearticletitle, a.thearticletext, a.thearticledate,
    u.idtheuser, u.theuserlogin
    FROM thearticle a
    INNER JOIN  theuser u 
    ON u.idtheuser = a.theuser_idtheuser
    WHERE a.idthearticle = $idarticle ;";

    $request = mysqli_query($db, $sql) or die("Erreur : ".mysqli_error($db));

    mysqli_num_rows($request)?$result = mysqli_fetch_assoc($request):header("Location: ./?page=erreur404")&&exit;
        
    


// pas de variable id    
}else{
    // redirection
    header("Location: ./");
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First CRUD | Article | <!-- ici le titre de l'article --></title>
</head>
<body>
    <?php
    // menu publique
    include "menu.php";
    ?>
    <h1>First CRUD | Article | <!-- ici le titre de l'article --></h1>
    <h4><?=$result['thearticletitle']?></h4>
    <p><?=nl2br($result['thearticletext'])?></p>
    <h5>Ecrit par <a href="?page=user&id=<?=$result['idtheuser']?>"><?=$result['theuserlogin']?></a> le <?=frenchDate($result['thearticledate'])?></h5>

    <?php
    include "menu.php";
    ?>
</body>
</html>