<?php

/**
 * Crée un Navire.
 * 
 * @param string numeroIMO NumeroIMO.
 * @param string nom Nom de famille, corse de préférence.
 * @param int type navire Type navire.
 * @param PDO db Connexion à la BDD.
 * @return boolean Succès ou échec. 
 * 
 */
function create(string $numeroIMO, string $nom, int $idTypeNavire, PDO $db) : bool
{
    // Prépare la requête
    $query = 'INSERT INTO navire (numeroIMO, nom, idTypeNavire) VALUES (:numeroIMO, :nom, :idTypeNavire)';
    $statement = $db->prepare($query);
    $statement->bindParam(':numeroIMO', $numeroIMO);
    $statement->bindParam(':nom', $nom);
    $statement->bindParam(':idTypeNavire', $idTypeNavire);

    // Exécute la requête
    $successOrFailure = $statement->execute();

    return $successOrFailure;
}
function getAllNavire(PDO $db): array
{

    // - Prépare la requête
$query = 'SELECT navire.id, navire.numeroIMO, navire.nom, navire.idTypeNavire, typeNavire.nom AS nomTypeNavire';
$query .= ' FROM navire';
$query .= ' JOIN typeNavire ON navire.idTypeNavire = typeNavire.id';
$statement = $db->prepare($query);
// - Exécute la requête
$successOrFailure = $statement->execute();
$listNavire = $statement->fetchAll(PDO::FETCH_ASSOC);

return $listNavire;
}
function update( int $id, string $numeroIMO, string $nom, $idTypeNavire, PDO $db): bool
{
    // - Prépare la requête
$query = '';
$query .= ' UPDATE navire';
$query .= ' SET';
$query .= ' navire.numeroIMO = :numeroIMO';
$query .= ' ,navire.nom = :nom';
$query .= ' ,navire.idTypeNavire = :idTypeNavire';
$query .= ' WHERE navire.id = :idNavire';

$statement = $db->prepare($query);
$statement->bindParam(':numeroIMO', $numeroIMO);
$statement->bindParam(':nom', $nom);
$statement->bindParam(':idTypeNavire', $idTypeNavire);
$statement->bindParam(':idNavire', $id);

// - Exécute la requête
$successOrFailure = $statement->execute();

return $successOrFailure;
}
