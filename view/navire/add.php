<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="/asset/css/style.css">
</head>

<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php' ?>

    <main>

        <form action="/ctrl/navire/add.php" method="post">

            <!-- numeroIMO -->
            <div>
                <label for="label">Numero IMO</label>
                <input type="text" name="numeroIMO" id="numeroIMO">
            </div>

            <!-- Nom -->
            <div>
                <label for="code">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>

            <!-- idTypeNavire -->
            <div>
                <label for="typeNavire">Type de navire</label>
                <select name="idTypeNavire" id="typeNavire">
                    <?php foreach ($listTypeNavire as $typeNavire) { ?>

                        <option value="<?= $typeNavire['id'] ?>"><?= $typeNavire['nom'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="submit">
                <button type="submit">Valider</button>
            </div>
        </form>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>