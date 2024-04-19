<?php

include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/marin.php';
// Modifie un Marin > Traite la soumission du formulaire

// Lis les informations depuis la requête HTTP
$marin = [];
$marin['id'] = $_POST['id'];
$marin['matricule'] = $_POST['matricule'];
$marin['nom'] = $_POST['nom'];
$marin['prenom'] = $_POST['prenom'];

// Modifier un Marin
$dbConnection = getConnection($dbConfig);
$marin = update($marin['id'], $marin['matricule'], $marin['nom'], $marin['prenom'], $dbConnection);

// Redirige vers la liste des Marins
header('Location: ' . '/ctrl/marin/list.php');
