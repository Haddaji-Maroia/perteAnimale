<?php


// Valider les deux champs
// S'il y a des erreurs, on redirige vers la page du formulaire, en mémorisant le temps d'une requete les erreurs et les anciennes données
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
        <dd><?= $_REQUEST['email'] ?></dd>
    </div>
</dl>
</body>
</html>