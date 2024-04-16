<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="/asset/css/style.css">
</head>

<body>

    <?php include '../view/_header.php' ?>

    <main>

        <form action="/ctrl/navire-update.php" method="post">

            <!-- Id -->
            <input type="hidden" name="id" value="<?= $navire['id'] ?>">

            <!-- NumeroIMO -->
            <div>
                <label for="label">Nom</label>
                <input type="text" name="NumeroIMO" id="NumeroIMO" value="<?= $navire['NumeroIMO'] ?>">
            </div>

            <!-- Nom -->
            <div>
                <label for="label">Service</label>
                <input type="text" name="nom" id="nom" value="<?= $navire['nom'] ?>">
            </div>

             <!-- idTypeNavire -->
             <div>
                <label for="label">Type de navire</label>
                <input type="text" name="idTypeNavire" id="idTypeNavire" value="<?= $navire['idTypeNavire'] ?>">
            </div>

            <div class="submit">
                <button type="submit">Valider</button>
            </div>
        </form>
    </main>
</body>

</html>