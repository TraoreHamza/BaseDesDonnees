<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
</head>

<body>

    <main>

        <form action="/ctrl/add-marin.php" method="post">

            <!-- Matricule -->
            <div>
                <label for="label">Matricule</label>
                <input type="text" name="matricule" id="matricule">
            </div>

            <!-- Nom -->
            <div>
                <label for="code">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>

            <!-- Prénom -->
            <div>
                <label for="code">Prénom</label>
                <input type="text" name="prenom" id="prenom">
            </div>

            <div class="submit">
                <button type="submit">Valider</button>
            </div>
        </form>
    </main>
</body>

</html>