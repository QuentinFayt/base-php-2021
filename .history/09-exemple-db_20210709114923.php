<?php
    /* var_dump($_POST); */

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
        <h3>Nous avons x commentaires</h3>
        <h4>Le nom </h4>
        <p>écrit</p>
        <p>Fait le x</p></hr>
    </body>
</html>