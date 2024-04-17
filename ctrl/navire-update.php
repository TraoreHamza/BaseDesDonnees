<?php

// Modifie une navire> Traite la soumission du formulaire

// Lis les informations depuis la requête HTTP
$navire = [];
$navire['id'] = $_POST['id'];
$navire['numeroIMO'] = $_POST['numeroIMO'];
$navire['nom'] = $_POST['nom'];
$navire['idTypeNavire'] = $_POST['idTypeNavire'];

// Modifie les information du Navire en base de données

// - Ouvre une connexion à la Base de données
include '../cfg/db.php';
include '../model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = '';
$query .= ' UPDATE navire';
$query .= ' SET';
$query .= ' navire.numeroIMO = :numeroIMO';
$query .= ' ,navire.nom = :nom';
$query .= ' ,navire.idTypeNavire = :idTypeNavire';
$query .= ' WHERE navire.id = :idNavire';

$statement = $dbConnection->prepare($query);
$statement->bindParam(':numeroIMO', $navire['numeroIMO']);
$statement->bindParam(':nom', $navire['nom']);
$statement->bindParam(':idTypeNavire', $navire['idTypeNavire']);
$statement->bindParam(':idNavire', $navire['id']);

// - Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des navire
header('Location: ' . '/ctrl/navire-list.php');
