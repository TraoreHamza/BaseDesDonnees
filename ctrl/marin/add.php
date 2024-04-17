<?php

// Lis les informations saisies dans le formulaire
$marin = [];
$marin['matricule'] = $_POST['matricule'];
$marin['nom'] = $_POST['nom'];
$marin['prenom'] = $_POST['prenom'];

// Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'INSERT INTO marin (matricule, nom, prenom) VALUES (:mat, :n, :p)';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':mat', $marin['matricule']);
$statement->bindParam(':n', $marin['nom']);
$statement->bindParam(':p', $marin['prenom']);
// - Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des Marins
header('Location: ' . '/ctrl/marin/list.php');
