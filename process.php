<?php

session_start();

$countries = require './config/conutries.php';

/*
 * Valider les deux champs
 */
$email = '';
$vemail = '';
if (array_key_exists('email', $_REQUEST)) {
    $email = trim($_REQUEST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = 'l email doit etre une email';
    }
}else{
    $_SESSION['errors']['email'] = "L email est requis";
}

if (array_key_exists('vemail', $_REQUEST)) {
    $vemail = trim($_REQUEST['vemail']);
    if ($email !== $vemail) {
        $_SESSION['errors']['vemail'] = 'L’email doit être confirmé';
    }
} else {
    $_SESSION['errors']['email'] = 'L’email de confirmation est requis';
}

if(array_key_exists('country', $_REQUEST)){
    if(!array_key_exists($_REQUEST['country'], $countries)){
        $_SESSION['errors']['country'] = 'Le pays sélectionné n est pas pris en charge par notre application'; 
    }
}




/*
 * S'il y a des erreurs, on redige vers la page du formulaire, en mémorisant le temps
 * d'une requete les erreurset les anciennes données
 */

if(isset($_SESSION['errors'])){
    $_SESSION['old'] = $_REQUEST;
    header('Location: index.php');
    exit;
}


/*
 * Assurer le rendu récapitulatif des données soumise
 */

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Récapitulatif</title>
</head>
<body>
    <h1>Récapitulatif des données soumises</h1>
    <dl>
        <div>
            <dt>Email&nbsp;:</dt>
            <dt><?= $email ?></dt>
        </div>
    </dl>
</body>
</html>





















<?php
