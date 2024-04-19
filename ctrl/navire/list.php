<?php
// Ouvre une connexion à la BDD
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/navire.php'; 

// Définit les clés de dictionnaire de la page
$pageTitle = 'Liste des Navires';

//Liste tous les navires
$dbConnection = getConnection($dbConfig);
$listNavire = getAllNavire($dbConnection);

// Rends la vue, au format HTML
include $_SERVER['DOCUMENT_ROOT'] . '/view/navire/list.php';