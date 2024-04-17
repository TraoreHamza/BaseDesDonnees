<?php

// Modifie une activite> Traite la soumission du formulaire

// Lis les informations depuis la requête HTTP
$activite = [];
$activite['id'] = $_POST['id'];
$activite['nom'] = $_POST['nom'];
$activite['idService'] = $_POST['idService'];

// Modifie les information du Activite en base de données

// - Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = '';
$query .= ' UPDATE activite';
$query .= ' SET';
$query .= ' activite.nom = :nom';
$query .= ' ,activite.idService = :idService';
$query .= ' WHERE activite.id = :idActivite';

$statement = $dbConnection->prepare($query);
$statement->bindParam(':nom', $activite['nom']);
$statement->bindParam(':idService', $activite['idService']);
$statement->bindParam(':idActivite', $activite['id']);

// - Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des Activite
header('Location: ' . '/ctrl/activite/list.php');
