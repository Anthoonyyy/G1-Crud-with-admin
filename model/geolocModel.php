<?php

// création de la fonction qui récupère tous les champs de `geoloc`
function getAllGeoloc(PDO $connection) : array|string
{
    $sql = "SELECT * FROM `geoloc` ;";
    try{
        $query = $connection->query($sql);
        // si il n'y a pas de résultats, fetchAll est un tableau vide
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

// on charge tous les champs d'un élément de geoloc grâce à son idgeoloc
// nous renvoie false en cas d'échec ou le message d'erreur sql
// ou un tableau associatif en cas de succès

function getOneGeolocByID(PDO $db, int $id) : string|bool|array
{
    $sql = "SELECT * FROM `geoloc` WHERE `idgeoloc` = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam("id",$id, PDO::PARAM_INT); 
    try{
        $stmt->execute();
        if($stmt->rowCount() ===0) return false;
        $results = $stmt->fetch();
        $stmt->closeCursor();
        return $results;

    }
    catch(Exception $e){
        return $e->getMessage();
    }
   

    }
    
    
   // on update tous les champs d'un élément de geoloc grâce à son idgeoloc en lui passant toute les variables
// nous renvoie false en cas d'échec ou le message d'erreur sql
// ou un tableau associatif en cas de succès

function updateOneGeolocByID(PDO $db, int $idgeoloc, string $title,string $description, float $latitude, float $longitude) : string|bool
{
   
    $sql = "UPDATE `geoloc` SET `title`= ?,`geolocdesc`= ?,`latitude`= ?,`longitude`= ? WHERE idgeoloc = ?";
    $stmt = $db->prepare($sql);
    /*$stmt->bindParam(1,$title);
    $stmt->bindParam(2,$description);
    $stmt->bindParam(3,$latitude);
    $stmt->bindParam(4,$longitude);
    $stmt->bindParam(5,$idgeoloc,PDO::PARAM_INT);*/
    try{
        $stmt->execute([
            $title,
            $description,
            $latitude,
            $longitude,
            $idgeoloc
        ]);
        if($stmt->rowCount()===0) return false;
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }
   
}