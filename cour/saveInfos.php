<?php
try{

    // $nom = "Doe";
    // $prenom= "Janee";
    // $email = "janee@doe.fr";
    // $password = "password";
    
    
    // Requête d'insertion de données où toutes les informations sont dans la requête de base.
    // $statement = "INSERT INTO user (prenom, nom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')";
    // $prepare = $pdo->prepare($statement);
    // $prepare->execute();
    
    // Méthode d'enregistrement qui va matcher les données dans le tableau avec les ?. 
    // Cette requête est plus courte à écrire et n'a pas besoin de clés dans le tableau.
    // Cependant il faut faire attention à l'ordre des données pour éviter de mélanger les valeurs dans les champs
    // $post = ["Doe", "Janee", "janee@doe.fr", "password"];
    // $statement = "INSERT INTO user (prenom, nom, email, password) VALUES (?,?,?,?)";
    // $prepare = $pdo->prepare($statement);
    // $prepare->execute($post);
    
    //Méthode d'enregistrement qui prend en compte les bindVelues
    //La requêtes match les paramètres avec les clés du tableau de données
    //ca évite l'enregistrement de données dans les mauvais champs
$post= [ "nom"=>"Doe","email"=>"jamy@doe.fr","prenom"=>"Janee","password"=>"password"];
$prepare = $pdo->prepare($statement);
$prepare->execute($post);

echo "ajout";

}catch(\PDOException $e){
    $e->getMessage();
}