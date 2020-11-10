<?php
 try{
     $statement = "DELETE FROM user where prenom='Janee'";
     $prepare = $pdo->prepare($statement);
     $prepare->execute();
     echo "suprimé";
 }catch(\PDOException $e){
    $e->getMessage();
 }