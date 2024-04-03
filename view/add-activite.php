<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
</head>

<body>

    <main>

        <form action="/ctrl/add-activite.php" method="post">

            <!-- Nom -->
            <div>
                <label for="label">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>

            <!-- Service -->
            <div>
                <label for="service">Service</label>
                <select name="idService" id="service">
                    <?php foreach ($listService as $service) { ?>

                        <option value="<?= $service['id'] ?>"><?= $service['nom'] ?></option>
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