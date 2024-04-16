<?php

// Modifier un Marin > Affiche le formulaire

// Définit les clés de dictionnaire de la page
$pageTitle = 'Modifier un Marin';

// Lis les informations depuis la requête HTTP (id du Marin)
$idMarin = $_GET['id'];

// Charge le Marin depuis la base de données

// - Ouvre une connexion à la BDD
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT marin.id, marin.matricule, marin.nom, marin.prenom';
$query .= ' FROM marin';
$query .= ' WHERE marin.id = :idMarin';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':idMarin', $idMarin);

// - Exécute la requête
$successOrFailure = $statement->execute();
$marin = $statement->fetch(PDO::FETCH_ASSOC);

// Rends la vue
include '../view/marin-update.php';
