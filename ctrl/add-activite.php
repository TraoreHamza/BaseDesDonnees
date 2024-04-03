<?php

// Lis les informations saisies dans le formulaire
$activite = [];
$activite['nom'] = $_POST['nom'];
$activite['idService'] = $_POST['idService'];

// Ecris les informations du Marin dans la base de données
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
$query = 'INSERT INTO activite (nom, idService) VALUES (:nom, :idService)';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':nom', $activite['nom']);
$statement->bindParam(':idService', $activite['idService']);
// - Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des Activités
header('Location: ' . '/ctrl/activite-list .php');
