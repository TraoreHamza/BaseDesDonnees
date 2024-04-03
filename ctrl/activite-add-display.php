<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Ajouter une Activité';

// Liste les Services disponibles
// - Ouvre une connexion à la Base de données
$host = '127.0.0.1';
$port = '3306';
$dbname = '410-php-database-GRA';
$user = 'root';
$password = '';
$dataSourceName = 'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname;
$dbConnection = new PDO($dataSourceName, $user, $password);
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// - Prépare la requête
$query = 'SELECT service.id, service.nom';
$query .= ' FROM service';
$statement = $dbConnection->prepare($query);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listService = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue
include '../view/activite-add.php';
