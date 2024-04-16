<?php

// Modifier un navire > Affiche le formulaire

// Définit les clés de dictionnaire de la page
$pageTitle = 'Modifier un Navire';

// Lis les informations depuis la requête HTTP (id du Marin)
$idNavire = $_GET['id'];

// Charge le Navire depuis la base de données

// - Ouvre une connexion à la BDD
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT navire.id, navire.numeroIMO, navire.nom, navire.idTypeNavire';
$query .= ' FROM navire';
$query .= ' WHERE navire.id = :idnavire';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':idnavire', $idnavire);

// - Exécute la requête
$successOrFailure = $statement->execute();
$navire = $statement->fetch(PDO::FETCH_ASSOC);

// Rends la vue
include '../view/navire-update.php';
