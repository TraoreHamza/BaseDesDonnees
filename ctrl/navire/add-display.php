<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Ajouter un navire';

// Liste les Navires disponibles
// - Ouvre une connexion à la Base de données

// Ouvre une connexion à la BDD
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT typeNavire.id, typeNavire.nom';
$query .= ' FROM typeNavire';
$statement = $dbConnection->prepare($query);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listTypeNavire = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue
include $_SERVER['DOCUMENT_ROOT'] . '/view/navire/add.php';
