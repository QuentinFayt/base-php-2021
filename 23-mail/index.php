<?php

require_once "config.php";

/* Serveur local => Mail envoyé depuis d'un serveur distant */
ini_set("SMTP", SMTP_HOST);
ini_set("smtp_port", SMTP_PORT);
ini_set("sendmail_from", MAIL);

var_dump($_POST);

if (!empty($_POST)) {
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])), ENT_QUOTES);
    $mail = filter_var(trim($_POST["mail"]), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])), ENT_QUOTES);

    if ($name && $mail && $message) {
        $confirm = "Sent!";

        $toAdmin = MAIL;
        $subjectAdmin = "Message de " . $name;
        $msgAdmin = $name . " à écrit : \n" . $message;
        $headersAdmin = [
            'From' => $mail,
            'Reply-To' => $mail,
            'X-Mailer' => 'PHP/' . phpversion()
        ];
        $toUser = $mail;
        $subjectUser = "Réponse du site";
        $msgUser = "Merci d'avoir laisser un message, je vous recontacte dans les plus bref délai.";
        $headersUser = [
            'From' => MAIL,
            'Reply-To' => MAIL,
            'X-Mailer' => 'PHP/' . phpversion()
        ];
        mail($toAdmin, $subjectAdmin, $msgAdmin, $headersAdmin);
        mail($toUser, $subjectUser, $msgUser, $headersUser);
    } else {
        $confirm = "An error occured!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
</head>

<body>
    <h1>Contactez-nous</h1>
    <?php
    if (isset($confirm)) {
        echo "<h2>" . $confirm . "</h2>";
    }
    ?>
    <form action="" name="contact" method="POST">
        <label for="nom">Nom:</label></br>
        <input name="name" placeholder="Votre nom" id="nom" required /></br>
        <label for="mail">Mail:</label></br>
        <input name="mail" placeholder="Votre mail" id="mail" required /></br>
        <label for="message">Votre message:</label></br>
        <textarea name="message" placeholder="Votre message" id="message" required></textarea></br>
        <input type="submit" value="send" />
    </form>
</body>

</html>