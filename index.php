<?php
    session_start() ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Description">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="Author">
    <title>J'ai perdue mon animal</title>
</head>
<body>
    <h1>Déclaration de perte d'animal</h1>
    <form action="/process.php" method="post">
    <fieldset> 
        <legend>Vos coordonnées</legend>
        <div>
            <label for="email">Email</label>
            <input type="email"
                   name="email"
                   id="email"
                   <?php
                    if (isset($_SESSION['old']['email'])): ?>
                   value="<?= $_SESSION['old']['email'] ?>"
                   <?php
                    endif ?>
                   required>
        </div>
        <?php if (isset($_SESSION['errors']['email'])): ?>
        <div><p><?= $_SESSION['errors']['email'] ?></p></div>
        <?php endif; ?>
        <div>
            <label for="vemail">Retapez votre email une seconde fois</label>
            <input type="email"
                   name="vemail"
                   id="vemail"
                <?php
                if (isset($_SESSION['old']['vemail'])): ?>
                    value="<?= $_SESSION['old']['vemail'] ?>"
                <?php
                endif ?>
                   required>
        </div>
        <?php if (isset($_SESSION['errors']['vemail'])): ?>
            <div><p><?= $_SESSION['errors']['vemail'] ?></p></div>
        <?php endif; ?>
        <label for="number">Téléphone</label>
        <input type="text" name="number" id="number" placeholder="0499 10 10 10">
        <label for="pays">Pays</label>
        <select name="pays" id="pays">
            <option value="Belgique">Belgique</option>
            <option value="France">France</option>
            <option value="Espagne">Espagne</option>
            <option value="Italie">Italie</option>
        </select>
    </fieldset>
        <fieldset>
            <legend>Description de l'animal perdu</legend>
            <div>
                <label for="typeAnimal">Type d'animal</label>
                <select name="typeAnimal" id="typeAnimal">
                    <option value="">Chien</option>
                    <option value="">Chat</option>
                    <option value="">Poisson</option>
                    <option value="">Oiseau</option>
                </select>
            </div>
            <div>
                <label for="nom">Nom de l'animal</label>
                <input type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="puce">Puce (obligatoire si chien)</label>
                <input type="text" name="puce" id="puce">
            </div>
            <div>
                <label for="sexe">sexe</label>
                <div>
                    <input type="radio" name="sexe" id="male" value="male">
                    <label for="sexeM">Male</label>

                    <input type="radio" name="sexe" id="femelle" value="femelle">
                    <label for="sexeF">Femelle</label>
                </div>
            </div>
            <div>
                <label for="age">Age (estimation)</label>
                <input type="text" name="age" id="age">
            </div>
            <div>
                <label for="race">Race</label>
                <input type="text" name="race" id="race">
            </div>
            <div>
                <label for="tattoo">Tatouage</label>
                <select name="tattoo" id="tattoo">
                    <option value="OreilleG">Oreille gauche</option>
                    <option value="OreilleD">Oreille droite</option>
                    <option value="CuisseG">Cuisse gauche</option>
                    <option value="CuisseD">Cuisse droite</option>
                </select>
                <label for="codeT">Code tatouage</label>
                <input type="text" name="codeT" id="codeT">
            </div>
            <div>
                <label for="desciption">Description / Signes particuliers</label>
                <textarea name="description" id="desciption" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="photo">Photo de l'animal</label>
                <input type="text" name="photo" id="photo">
            </div>
        </fieldset>
        <fieldset>
            <legend>Date et localité de la perte</legend>
            <div>
                <label for="date">Date</label>
                <input type="date" name="date" id="date">
            </div>
            <div>
                <label for="heure">Heure</label>
                <input type="time">
            </div>
            <div>
                <label for="codeP">Code postal</label>
                <input type="text" name="codeP" id="codeP">
            </div>
            <div>
                <label for="pays">Pays</label>
                <select name="pays" id="pays">
                    <option value="Belgique">Belgique</option>
                    <option value="France">France</option>
                    <option value="Espagne">Espagne</option>
                    <option value="Italie">Italie</option>
                </select>
            </div>
        </fieldset>
        <button type="submit">Déclarer mon animal</button>
    </form>
</body>
</html>

<?php
$_SESSION['errors'] = null;
$_SESSION['old'] = null;


