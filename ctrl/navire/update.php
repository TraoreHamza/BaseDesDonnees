<?php

include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/navire.php';
// Modifie une navire> Traite la soumission du formulaire

// Lis les informations depuis la requête HTTP
$navire = [];
$navire['id'] = $_POST['id'];
$navire['numeroIMO'] = $_POST['numeroIMO'];
$navire['nom'] = $_POST['nom'];
$navire['idTypeNavire'] = $_POST['idTypeNavire'];

// Modifier un Navire

$dbConnection = getConnection($dbConfig);
$navire = update($navire['id'], $navire['numeroIMO'], $navire['nom'], $navire['idTypeNavire'], $dbConnection);

// Redirige vers la liste des navire
header('Location: ' . '/ctrl/navire/list.php');
