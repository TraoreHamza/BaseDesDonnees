<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Liste des Navires';

// Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT navire.id, navire.numeroIMO, navire.nom, navire.idTypeNavire, typeNavire.nom AS nomTypeNavire';
$query .= ' FROM navire';
$query .= ' JOIN typeNavire ON navire.idTypeNavire = typeNavire.id';
$statement = $dbConnection->prepare($query);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listNavire = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue, au format HTML
include $_SERVER['DOCUMENT_ROOT'] . '/view/navire/list.php';
