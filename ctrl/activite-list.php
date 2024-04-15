<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Liste des Activités';

// Ouvre une connexion à la Base de données
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT activite.id, activite.nom, activite.idService, service.nom AS nomService';
$query .= ' FROM activite';
$query .= ' JOIN service ON activite.idService = service.id';
$statement = $dbConnection->prepare($query);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listActivite = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue, au format HTML
include '../view/activite-list.php';
