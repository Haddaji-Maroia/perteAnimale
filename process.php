<?php

session_start();

// Valider les deux champs

$email = '';
if (array_key_exists('email', $_REQUEST)){
    $email = trim($_REQUEST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['errors']['email'] = 'L’email doit etre un email';
    }
}else{
    $_SESSION['errors']['email'] = 'L’email est requis';
}

// S'il y a des erreurs, on redirige vers la page du formulaire, en mémorisant le temps d'une requete les erreurs et les anciennes données

if (!is_null($_SESSION['errors'])){
    $_SESSION['old'] = $_REQUEST;
    header('Location: /index.php');
    exit;

}
//Assurer le rendu récapitulatif des données soumises

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
        <dd><?= $email ?></dd>
    </div>
</dl>
</body>
</html>