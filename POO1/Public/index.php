<?php

// require "Voiture.php";

/*
$voiture = new Voiture();

var_dump($voiture);
echo $voiture->roues;
*/
use App\Mammifere\Chien;
use App\Mammifere\Chat;

require "../Autoloader.php";

$autoloader = new Autoloader();
$autoloader->register();

$chien1 = new Chien("Gribouille","marron-blanc-noir");
$chien2 = new Chien("Boby", "gris");
$chat1 = new Chat("Bouboule","tacheté");
$chat2 = new Chat("Caramel", "marron");

var_dump($chien1);
echo "</br>";
echo $chien1->nom;
echo "</br>";
echo $chien1->getCri();
echo "</br>";
echo $chien2->nom;
echo "</br>";
echo $chat1->nom;
echo "</br>";
echo $chat2->nom;
echo "</br>";

// $poisson1 = new PoissonRouge();
// echo $poisson1->nager();