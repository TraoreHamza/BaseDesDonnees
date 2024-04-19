<?php

// Ajoute un navire

// Lis les informations depuis la requête HTTP
$navire = [];
$navire['numeroIMO'] = $_POST['numeroIMO'];
$navire['nom'] = $_POST['nom'];
$navire['idTypeNavire'] = $_POST['idTypeNavire'];

// Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/navire.php';

// Crée le Navire
$dbConnection = getConnection($dbConfig);
$isSuccess = create($navire['numeroIMO'], $navire['nom'], $navire['idTypeNavire'], $dbConnection);

// Redirige vers la liste des navires
header('Location: ' . '/ctrl/navire/list.php');
