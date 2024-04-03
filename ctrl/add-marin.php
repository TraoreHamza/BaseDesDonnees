<?php

// Lis les informations saisies dans le formulaire
$marin = [];
$marin['matricule'] = $_POST['matricule'];
$marin['nom'] = $_POST['nom'];
$marin['prenom'] = $_POST['prenom'];

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
$query = 'INSERT INTO marin (matricule, nom, prenom) VALUES (:mat, :n, :p)';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':mat', $marin['matricule']);
$statement->bindParam(':n', $marin['nom']);
$statement->bindParam(':p', $marin['prenom']);
// - Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des Marins
header('Location: ' . '/ctrl/marin-list.php');
