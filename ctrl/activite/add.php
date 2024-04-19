<?php

include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/activite.php';

// Ajoute une Activite

// Lis les informations depuis la requête HTTP
$activite = [];
$activite['nom'] = $_POST['nom'];
$activite['idService'] = $_POST['idService'];

// Crée l'activité
$dbConnection = getConnection($dbConfig);
$isSuccess = create($activite['nom'], $activite['idService'], $dbConnection);

// Redirige vers la liste des Activités
header('Location: ' . '/ctrl/activite/list.php');
