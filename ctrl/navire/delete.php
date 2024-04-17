<?php

// supprimer un navire

// Lis les informations depuis la réquête HTTP (id du navire)
$idNavire = $_GET['id'];

// Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query .= 'DELETE';
$query .= ' FROM `navire`';
$query .= ' WHERE navire.id = :idNavire';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':idNavire', $idNavire);

// - Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des Navires
header('Location: ' . '/ctrl/navire/list.php');
