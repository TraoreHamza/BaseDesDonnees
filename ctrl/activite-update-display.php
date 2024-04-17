<?php

// Modifier un Activite > Affiche le formulaire

// Définit les clés de dictionnaire de la page
$pageTitle = 'Modifier une Activite';

// Lis les informations depuis la requête HTTP (id du Marin)
$idActivite = $_GET['id'];

// Charge le Activite depuis la base de données

// - Ouvre une connexion à la BDD
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT activite.id, activite.nom, activite.idService';
$query .= ' FROM activite';
$query .= ' WHERE activite.id = :idActivite';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':idActivite', $idActivite);

// - Exécute la requête
$successOrFailure = $statement->execute();
$activite = $statement->fetch(PDO::FETCH_ASSOC);

// Charge la listes des Services
// Ouvre une connexion à la Base de données
// include '../cfg/db.php';
// include '../model/lib/db.php';
// $dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT service.id, service.nom';
$query .= ' FROM service';
$statement = $dbConnection->prepare($query);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listService = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue
include $_SERVER['DOCUMENT_ROOT'] . '/view/activite/update.php';
