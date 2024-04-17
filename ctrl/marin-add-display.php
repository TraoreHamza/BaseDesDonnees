<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Ajouter un Marin'; 

// Ouvre une connexion à la Base de données
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT marin.id, marin.nom';
$query .= ' FROM marin';
$statement = $dbConnection->prepare($query);

// - Exécute la requête
$successOrFailure = $statement->execute();
$listMarin = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue
include $_SERVER['DOCUMENT_ROOT'] . '/view/marin/add.php';
