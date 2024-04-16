<?php

// supprimer une activite

// Lis les informations depuis la réquête HTTP (id du activite)
 $idActivite = $_GET['id'];

// Ouvre une connexion à la Base de données
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query .= 'DELETE';
$query .= ' FROM `activite`';
$query .= ' WHERE activite.id = :idActivite';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':idActivite' , $idActivite);

// - Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des Activites
header('Location: ' . '/ctrl/activite-list.php');