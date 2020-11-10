
<?php

try {
    // Connexion à la BDD grâce à la class PDO
    $pdo = new PDO('mysql:host=localhost:3306;dbname=firstDb', 'root', '');
    // Exec permet d'envoyer des requêtes. On l'utilise généralement pour de la configuration
    $pdo->exec("SET NAMES UTF8");
    // setAttribute permet de configurer certains points de nos requêtes comme l'affichage des erreurs
    // avec PDO::ATTR_ERRMODE
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //include "getinfos.php";
    //include "saveInfos.php";
    include "deleteInfos.php";

} catch (\PDOException $e) {
    echo $e->getMessage();
}
