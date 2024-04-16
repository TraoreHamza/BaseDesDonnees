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

        <form action="/ctrl/marin-update.php" method="post">

            <!-- Id -->
            <input type="hidden" name="id" value="<?= $marin['id'] ?>">

            <!-- Matricule -->
            <div>
                <label for="label">Matricule</label>
                <input type="text" name="matricule" id="matricule" value="<?= $marin['matricule'] ?>">
            </div>

            <!-- Nom -->
            <div>
                <label for="code">Nom</label>
                <input type="text" name="nom" id="nom" value="<?= $marin['nom'] ?>">
            </div>

            <!-- Prénom -->
            <div>
                <label for="code">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="<?= $marin['prenom'] ?>">
            </div>

            <div class="submit">
                <button type="submit">Valider</button>
            </div>
        </form>
    </main>

    <?php include '../view/_footer.php' ?>
</body>

</html>