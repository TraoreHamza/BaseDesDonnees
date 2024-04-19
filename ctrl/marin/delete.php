<?php

// Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/marin.php';
// supprimer un Marin

// Lis les informations depuis la réquête HTTP (id du Marin)
$idMarin = $_GET['id'];

$dbConnection = getConnection($dbConfig);
$idMarin = delete($idMarin, $dbConnection);

// Redirige vers la liste des Marins
header('Location: ' . '/ctrl/marin/list.php');
