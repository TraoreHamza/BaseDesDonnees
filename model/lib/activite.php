<?php

/**
 * Crée un Activite.
 * 
 * @param string nom Nom.
 * @param int nom Nom de service, corse de préférence.
 * @param PDO db Connexion à la BDD.
 * @return boolean Succès ou échec. 
 * 
 */
function create(string $nom, int $idService, PDO $db) : bool
{
    // Prépare la requête
    $query = 'INSERT INTO activite (nom, idService) VALUES (:nom, :idService)';
    $statement = $db->prepare($query);
    $statement->bindParam(':nom', $nom);
    $statement->bindParam(':idService', $idService);

    // Exécute la requête
    $successOrFailure = $statement->execute();

    return $successOrFailure;
}
 