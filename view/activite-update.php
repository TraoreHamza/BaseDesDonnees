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

        <form action="/ctrl/activite-update.php" method="post">

            <!-- Id -->
            <input type="hidden" name="id" value="<?= $activite['id'] ?>">

            <!-- Nom -->
            <div>
                <label for="label">Nom</label>
                <input type="text" name="nom" id="nom" value="<?= $activite['nom'] ?>">
            </div>

            <!-- Service -->
            <div>
                <label for="service">Service</label>
                <select name="idService" id="service">
                    <?php foreach ($listService as $service) { ?>

                        <?php

                        // Quand l'option correspond au Type du Navire à modifier,
                        // ajoute l'attribut 'selected' à la balise option
                        $isSelectedMsg = '';
                        if ($activite['idService'] == $service['id']) {
                            $isSelectedMsg = 'selected';
                        }
                        ?>

                        <option value="<?= $service['id'] ?>" <?= $isSelectedMsg ?>><?= $service['nom'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="submit">
                <button type="submit">Valider</button>
            </div>
        </form>
    </main>
</body>

</html>