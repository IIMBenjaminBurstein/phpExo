
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Public\Asset\order.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Bons de commande</h2>
        <h2><a href="?page=product">Voir les produits</a></h2>
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
                foreach($orders as $line):
                    if($i%2 == 1){
                        ?> <tr class="gris"> <?php
                    }else{
                        ?><tr class="blanc"><?php
                    }
                    ?>
                   
                        <td class="rouge">
                           <?= $line->orderNumber ?>
                        </td>
                        <td>
                        <?=  $line->orderDate ?>
                        </td>
                        <td>
                        <?= $line->shippedDate ?>
                        </td>
                        <td>
                        <?= $line->status?>
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

