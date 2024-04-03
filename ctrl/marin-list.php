<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Liste tous les Marins';

// Liste les Navires depuis la base de données
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
$query = 'SELECT marin.id, marin.matricule, marin.nom, marin.prenom';
$query .= ' FROM marin';
$statement = $dbConnection->prepare($query);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listMarin = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue, au format HTML
include '../view/marin-list.php';
