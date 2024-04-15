<?php

// Lis les informations saisies dans le formulaire
$activite = [];
$activite['nom'] = $_POST['nom'];
$activite['idService'] = $_POST['idService'];

// Ouvre une connexion à la Base de données
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'INSERT INTO activite (nom, idService) VALUES (:nom, :idService)';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':nom', $activite['nom']);
$statement->bindParam(':idService', $activite['idService']);
// - Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des Activités
header('Location: ' . '/ctrl/activite-list.php');
