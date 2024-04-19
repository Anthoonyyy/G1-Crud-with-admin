<?php

// création de la fonction qui récupère tous les champs de `geoloc`

function getAllGeoloc (PDO $connection): array|string
{
    $sql = "SELECT * FROM `geoloc`";
     try{
        $query = $connection->query($sql);
        // si pas de résultats, fetchAll est un tableau vide
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
     }catch(Exception $e){
         return $e->getMessage();
     }
}