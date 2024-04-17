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
                            <a href="/ctrl/navire-delete.php?id=<?= $navire['id'] ?>" onclick="return confirm('Confirmer la suppression')"><span class="material-symbols-outlined" id ="del">
                                    delete
                                </span></a>
                            <a href="/ctrl/navire-update-display.php?id=<?= $navire['id'] ?>"><span class="material-symbols-outlined" id="edit">
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