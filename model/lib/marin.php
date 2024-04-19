<?php

/**
 * Crée un Marin.
 * 
 * @param string matricule Matricule.
 * @param string nom Nom de famille, corse de préférence.
 * @param string prenom Prénom.
 * @param PDO db Connexion à la BDD.
 * @return boolean Succès ou échec. 
 * 
 */
function create(string $matricule, string $nom, string $prenom, PDO $db): bool
{
    // Prépare la requête
    $query = 'INSERT INTO marin (matricule, nom, prenom) VALUES (:matricule, :nom, :prenom)';
    $statement = $db->prepare($query);
    $statement->bindParam(':matricule', $matricule);
    $statement->bindParam(':nom', $nom);
    $statement->bindParam(':prenom', $prenom);

    // Exécute la requête
    $successOrFailure = $statement->execute();

    return $successOrFailure;
}
function getAll(PDO $db): array
{
    // - Prépare la requête
    $query = 'SELECT marin.id, marin.matricule, marin.nom, marin.prenom';
    $query .= ' FROM marin';
    $statement = $db->prepare($query);

    // - Exécute la requête
    $successOrFailure = $statement->execute();
    $listMarin = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $listMarin;
}
function update(int $id, string $matricule, string $nom, string $prenom, PDO $db): bool
{
    // - Prépare la requête
    $query = '';
    $query .= ' UPDATE marin';
    $query .= ' SET';
    $query .= '  marin.matricule = :matricule';
    $query .= ' ,marin.nom = :nom';
    $query .= ' ,marin.prenom = :prenom';
    $query .= ' WHERE marin.id = :idMarin';

    $statement = $db->prepare($query);
    $statement->bindParam(':idMarin', $id);
    $statement->bindParam(':matricule', $matricule);
    $statement->bindParam(':nom', $nom);
    $statement->bindParam(':prenom', $prenom);

    // - Exécute la requête
    $successOrFailure = $statement->execute();
   
    return $successOrFailure;
}
function delete(int $id, PDO $db): bool
{
    // - Prépare la requête
    $query = '';
    $query .= 'DELETE';
    $query .= ' FROM `marin`';
    $query .= ' WHERE marin.id = :idMarin';
    $statement = $db->prepare($query);
    $statement->bindParam(':idMarin', $id);

    // - Exécute la requête
    $successOrFailure = $statement->execute();

  
    return $successOrFailure;
    
}
