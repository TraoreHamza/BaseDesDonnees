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

        <table border="1">


            <!-- Entêtes de colonne écrites 'en dur' -->
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>nom du service</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listActivite as $activite) { ?>

                    <tr>
                        <td><?= $activite['id'] ?></td>
                        <td><?= $activite['nom'] ?></td>
                        <td><?= $activite['nomService'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </main>

    <footer>
    </footer>
</body>

</html>