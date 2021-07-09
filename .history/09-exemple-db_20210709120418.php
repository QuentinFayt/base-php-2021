<?php
    /* var_dump($_POST); */
    $connectToDB = mysqli_connect("localhost", "root", "", "ex09", 3307);

    $previousArticles = mysqli_query($connectToDB, "SELECT * FROM goldenbook ORDER BY date DESC;");

    $nbArticles = mysqli_num_rows($previousArticles);

    $dataArticles = mysqli_fetch_assoc($previousArticles);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Livre d'or sur une page</title>
    </head>
    <body>
        <h1>Livre d'or de Quentin</h1>
        <form name="goldenbook" method="post" action="">
            <input type="text" name="user_name" placeholder="entrez votre nom" required/>
            <br/>
            <textarea name="user_message" placeholder="Votre message" required>
            </textarea>
            <br/>
            <input type="submit" value="Envoyer"/>
        </form>
        <h3>Nous avons <?=$nbArticles?> commentaires</h3>
        <?php
            foreach($dataArticles as $item){
        ?>
        <h4><?=$item["user_name"]?></h4>
        <p>écrit</p>
        <p>Fait le x</p></hr>
        <?php
            }
        ?>
    </body>
</html>