<?php

// création de la fonction qui récupère tous les champs de `geoloc`
<<<<<<< HEAD

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
=======
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
>>>>>>> e37cb6da1d8b932925c1679034567bf1b5c69dfc
}