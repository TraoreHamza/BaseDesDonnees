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
                <input type="text" name="numeroIMO" id="label" value="<?= $navire['numeroIMO'] ?>">
            </div>

            <!-- Nom -->
            <div>
                <label for="label">Service</label>
                <input type="text" name="nom" id="nom" value="<?= $navire['nom'] ?>">
            </div>

           <!-- idTypeNavire -->
           <div>
                <label for="service">Service</label>
                <select name="idTypeNavire" id="idTypeNavire">
                    <?php foreach ($listTypeNavire as $typeNavire) { ?>

                        <?php

                        // Quand l'option correspond au Type du Navire à modifier,
                        // ajoute l'attribut 'selected' à la balise option
                        $isSelectedMsg = '';
                        if ($navire['idTypeNavire'] == $typeNavire['id']) {
                            $isSelectedMsg = 'selected';
                        }
                        ?>

                        <option value="<?= $typeNavire['id'] ?>" <?= $isSelectedMsg ?>><?= $typeNavire['nom'] ?></option>
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