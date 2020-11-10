<?php
try{
    $query = $pdo->query("SELECT `orderNumber`,`orderDate`, `shippedDate`,`status` FROM orders WHERE status = 'Shipped';");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
}catch (\PDOException $e){
    echo $e->getMessage();
}