<?php

try{

    $pdo = new PDO('mysql:host=localhost:3306;dbname=classicmodels', 'root', '');
    $pdo->exec("SET NAMES UTF8");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    include "getInfos.php";
    ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Bons de commande</h2>
    </header>
    <main>
    <h1>Liste des commandes</h1>
    <table>
        <thead>
            <tr>
                <th>Commande</th>
                <th> Date de la commande</th>
                <th class="chelou">Date de livraison</th>
                <th class="chelou">Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php 
             $i = 1;
                foreach($result as $line):
                    if($i%2 == 1){
                        ?> <tr class="gris"> <?php
                    }else{
                        ?><tr class="blanc"><?php
                    }
                    ?>
                   
                        <td class="rouge">
                           <?php echo $line["orderNumber"]; ?>
                        </td>
                        <td>
                        <?php echo $line["orderDate"];?>
                        </td>
                        <td>
                        <?php  echo $line["shippedDate"];?>
                        </td>
                        <td>
                        <?php  echo $line["status"];?>
                        </td>
                    </tr>
            <?php  
            $i+=1;
            endforeach ?>
        </tbody>
       

    </table>
    </main>
</body>
</html>
    <?php
    

}catch(\PDOException $e){
    echo $e->getMessage();
}
?>
