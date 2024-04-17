<?php

// Modifie un Marin > Traite la soumission du formulaire

// Lis les informations depuis la requête HTTP
$marin = [];
$marin['id'] = $_POST['id'];
$marin['matricule'] = $_POST['matricule'];
$marin['nom'] = $_POST['nom'];
$marin['prenom'] = $_POST['prenom'];

// Modifie les information du Marin en base de données

// - Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = '';
$query .= ' UPDATE marin';
$query .= ' SET';
$query .= '  marin.matricule = :matricule';
$query .= ' ,marin.nom = :nom';
$query .= ' ,marin.prenom = :prenom';
$query .= ' WHERE marin.id = :idMarin';

$statement = $dbConnection->prepare($query);
$statement->bindParam(':matricule', $marin['matricule']);
$statement->bindParam(':nom', $marin['nom']);
$statement->bindParam(':prenom', $marin['prenom']);
$statement->bindParam(':idMarin', $marin['id']);

// - Exécute la requête
$successOrFailure = $statement->execute();

// Redirige vers la liste des Marins
header('Location: ' . '/ctrl/marin/list.php');
