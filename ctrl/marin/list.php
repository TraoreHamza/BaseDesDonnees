<?php
// Ouvre une connexion à la BDD
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/marin.php'; 

// Définit les clés de dictionnaire de la page
$pageTitle = 'Liste des Marins';

//Liste tous les marins
$dbConnection = getConnection($dbConfig);
$listMarin = getAll($dbConnection);

// Rends la vue, au format HTML
include $_SERVER['DOCUMENT_ROOT'] . '/view/marin/list.php';
