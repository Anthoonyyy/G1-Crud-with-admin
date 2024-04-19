<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Accueil</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil</a></li>
<<<<<<< HEAD
=======
            <li><a href="?json" target="_blank">API</a> format JSON</li>
>>>>>>> e37cb6da1d8b932925c1679034567bf1b5c69dfc
            <li><a href="?connect">Connexion</a></li>
        </ul>
    </nav>
    <div id="content">
        <h3>Liste de nos lieux</h3>
        <?php
<<<<<<< HEAD
        // datas est une chaine de caractère : erreur sql !
=======
        // datas est une chaîne de caractère : erreur SQL !
>>>>>>> e37cb6da1d8b932925c1679034567bf1b5c69dfc
        if(is_string($datas)):
        ?>
            <h3 id="alert"><?=$datas?></h3>
        <?php
<<<<<<< HEAD
        //pas encore de geoloc
        elseif(empty($datas)):
        ?>
            <h3 id="comment">Pas encore de lieu</h3>
        <?php
        //Nous avons des lieux
         else:
            $nb = count($datas);
        ?>
             <h3>Il y a <?= $nb?> <?=$nb>1 ? "lieux" : " lieu"?></h3>

        <?php
        endif;
        ?>
=======
        // Pas encore de `geoloc`
        elseif(empty($datas)):
        ?>
            <h3 id="comment">Pas encore de lieu.</h3>
        <?php
        // Nous avons des lieux
        else:
            // on compte le nombre de données 
            $nb = count($datas);
        ?>
            <h3>Il y a <?=$nb?> <?=$nb>1 ? "lieux" : "lieu"?></h3>

            <?php
            // tant qu'on a des données
            // var_dump($datas);
            foreach($datas as $data):
            ?>
            <h4><?=$data['title']?></h4>
            <p><?=$data['geolocdesc']?></p>
            <p><?=$data['latitude']?> | <?=$data['longitude']?></p>
            <hr>
        <?php
            endforeach;
        endif;
        ?>   
>>>>>>> e37cb6da1d8b932925c1679034567bf1b5c69dfc
    </div>
</body>
</html>