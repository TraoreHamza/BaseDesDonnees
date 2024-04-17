<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listActivite as $activite) { ?>

                    <tr>
                        <td><?= $activite['id'] ?></td>
                        <td><?= $activite['nom'] ?></td>
                        <td><?= $activite['nomService'] ?></td>
                        <td>
                            <a href="/ctrl/activite-delete.php?id=<?= $activite['id'] ?>" onclick="return confirm('Confirmer la suppression')" ><span class="material-symbols-outlined" id ="del">
                                    delete
                                </span></a>
                            <a href="/ctrl/activite-update-display.php?id=<?= $activite['id'] ?>" ><span class="material-symbols-outlined" id="edit">
                                    box_edit
                                </span></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </main>

    <footer>
    </footer>
</body>

</html>