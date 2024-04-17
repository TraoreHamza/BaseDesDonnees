<?php

// Ajoute un navire

// Lis les informations depuis la requête HTTP
$navire = [];
$navire['numeroIMO'] = $_POST['numeroIMO'];
$navire['nom'] = $_POST['nom'];
$navire['idTypeNavire'] = $_POST['idTypeNavire'];

// Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// Prépare la requête
$query = 'INSERT INTO navire (numeroIMO, nom, idTypeNavire) VALUES (:num, :n, :idT)';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':num', $navire['numeroIMO']);
$statement->bindParam(':n', $navire['nom']);
$statement->bindParam(':idT', $navire['idTypeNavire']);

// Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des navires
header('Location: ' . '/ctrl/navire/list.php');
