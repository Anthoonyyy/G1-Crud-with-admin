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
            <li><a href="?connect">Connexion</a></li>
        </ul>
    </nav>
    <div id="content">
        <h3>Liste de nos lieux</h3>
        <?php
        // datas est une chaine de caractère : erreur sql !
        if(is_string($datas)):
        ?>
            <h3 id="alert"><?=$datas?></h3>
        <?php
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
    </div>
</body>
</html>