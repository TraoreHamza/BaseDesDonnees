<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Ajouter une Activité';

// Ouvre une connexion à la Base de données
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT service.id, service.nom';
$query .= ' FROM service';
$statement = $dbConnection->prepare($query);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listService = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue
include $_SERVER['DOCUMENT_ROOT'] . '/view/activie/add.php';
