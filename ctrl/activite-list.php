<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Liste toutes les Activités';

// Liste les Navires depuis la base de données
// - Ouvre une connexion à la Base de données
$host = '127.0.0.1';
$port = '3306';
$dbname = '380-database++-GRA';
$user = 'root';
$password = '';
$dataSourceName = 'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname;
$dbConnection = new PDO($dataSourceName, $user, $password);
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
