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
                    <th>matricule</th>
                    <th>nom</th>
                    <th>prénom</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listMarin as $marin) { ?>

                    <tr>
                        <td><?= $marin['id'] ?></td>
                        <td><?= $marin['matricule'] ?></td>
                        <td><?= $marin['nom'] ?></td>
                        <td><?= $marin['prenom'] ?></td>
                        <td><a href="/ctrl/marin-delete.php?id=<?= $marin['id'] ?>" onclick ="return confirm('confirmer la suppression')"">Supprimer</a></td>
                        <a href="/ctrl/marin-update-display.php?id=<?= $marin['id'] ?>">Modifier</a>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </main>

    <footer>
    </footer>
</body>

</html>