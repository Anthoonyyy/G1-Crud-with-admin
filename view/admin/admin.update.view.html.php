<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update d'un article</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Update d'un article</h1>
    <nav>
        <ul>
            <li><a href="./"></a>Accueil de l'administration</li>
            <li><a href="?create">Ajouter un lieu</a></li>
            <li><a href="?disconnect">Déconnexion</a></li>
        </ul>
    </nav>
    <div id="content">
        <h3>Article à modifier</h3>
        <?php
        // datas est une chaîne de caractère : erreur SQL !
        if(is_string($getOneGeoLoc)):
        ?>
            <h3 id="alert"><?=$getOneGeoLoc?></h3>
        <?php
        // Pas encore de `geoloc` trouvée
        elseif($getOneGeoLoc === false):
        ?>
            <h3 id="comment">Ce lieu n'existe plus !</h3>
        <?php
        // Nous avons des lieux
        else:
            // Nous avons un lieu
           
        ?>
       
    
            
            <?php
            // tant qu'on a des données
            // var_dump($datas);
        
            ?>
            <form method="POST" name="geo" action="">
                <input type="hidden" value="<?=$getOneGeoLoc['idgeoloc']?>" name="idgeoloc">
                <input type="text" name="title" value="<?=$getOneGeoLoc['title']?>"  required><br>
                <textarea name="geolocdesc"><?=$getOneGeoLoc['geolocdesc']?></textarea><br>
                <input type="number" name="latitude" step="0.00000001" value="<?=$getOneGeoLoc['latitude']?>" required>
                <input type="number" name="longitude" step="0.00000001" value="<?=$getOneGeoLoc['longitude']?>" required>
                <input type="submit" value="Update">
               
            </form>
        <?php endif ?>   
    </div>
</body>
</html>