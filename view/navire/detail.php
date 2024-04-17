<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="/asset/css/style.css">
</head>

<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php' ?>

    <main>


        <ul>
            <li>id : <?= $listNavire[0]['id'] ?></li>
            <li>numeroIMO : <?= $listNavire[0]['numeroIMO'] ?></li>
            <li>nom : <?= $listNavire[0]['nom'] ?></li>
            <li>idTypeNavire : <?= $listNavire[0]['idTypeNavire'] ?></li>
        </ul>
    </main>
</body>

</html>