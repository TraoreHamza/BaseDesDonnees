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

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php' ?>

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
                        <td>
                            <a href="/ctrl/marin/delete.php?id=<?= $marin['id'] ?>" onclick="return confirm('Confirmer la suppression')"><span class="material-symbols-outlined" id="del">
                                    delete
                                </span></a>
                            <a href="/ctrl/marin/update-display.php?id=<?= $marin['id'] ?>"><span class="material-symbols-outlined" id="edit">
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