<?php

// Définit les clés de dictionnaire de la page
$pageTitle = 'Détail d\'un Navire';

// Lis les informations depuis la requête HTTP
$idNavire =  $_GET['id'];

// Ouvre une connexion à la BDD
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

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
