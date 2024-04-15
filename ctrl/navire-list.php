<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Liste des Navires';

// Ouvre une connexion à la Base de données
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT navire.id, navire.numeroIMO, navire.nom, navire.idTypeNavire';
$query .= ' FROM navire';
$statement = $dbConnection->prepare($query);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listNavire = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue, au format HTML
include '../view/navire-list.php';
