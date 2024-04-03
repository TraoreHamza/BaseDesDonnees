<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Détail d\'un Navire';

// Liste toutes les informations du Navire dont l'id est passé en paramète de la requête HTTP
$idNavire =  $_GET['id'];
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
$query = 'SELECT navire.id, navire.numeroIMO, navire.nom, navire.idTypeNavire';
$query .= ' FROM navire';
$query .= ' WHERE navire.id = :id';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':id', $idNavire);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listNavire = $statement->fetchAll(PDO::FETCH_ASSOC);

// Rends la vue, au format HTML
include '../view/navire.php';
