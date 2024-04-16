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
                    <th>numeroIMO</th>
                    <th>nom</th>
                    <th>idTypeNavire</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach ($listNavire as $navire) { ?>

                    <tr>
                        <td><a href="/ctrl/navire.php?id=<?= $navire['id'] ?>"><?= $navire['id'] ?></a></td>
                        <td><?= $navire['numeroIMO'] ?></td>
                        <td><?= $navire['nom'] ?></td>
                        <td><?= $navire['idTypeNavire'] ?></td>
                        <td>
                            <a href="/ctrl/navire-delete.php?id=<?= $navire['id'] ?>" onclick="return confirm('Confirmer la suppression')">Supprimer</a>
                            <a href="/ctrl/navire-update-display.php?id=<?= $navire['id'] ?>">Modifier</a>
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