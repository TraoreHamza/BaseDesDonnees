<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
</head>

<body>


    <main>

        <table border="1">


            <!-- Entêtes de colonne écrites 'en dur' -->
            <thead>
                <tr>
                    <th>id</th>
                    <th>numeroIMO</th>
                    <th>nom</th>
                    <th>idTypeNavire</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listNavire as $navire) { ?>

                    <tr>
                        <td><a href="/ctrl/navire.php?id=<?= $navire['id'] ?>"><?= $navire['id'] ?></a></td>
                        <td><?= $navire['numeroIMO'] ?></td>
                        <td><?= $navire['nom'] ?></td>
                        <td><?= $navire['idTypeNavire'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </main>

    <footer>
    </footer>
</body>

</html>