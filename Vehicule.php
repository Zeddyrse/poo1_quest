<?php
// index.php

require_once 'Bicycle.php';
require 'Car.php';
$bike = new Bicycle();
var_dump($bike);
$bike->setColor('red');
$bike->getColor();
$bike->setCurrentSpeed(15);
$bike->getCurrentSpeed();
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->setColor('Blue');
$rockrider->getColor();
$rockrider->dump();

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setColor('purpule');
$tornado->getColor();
$tornado->forward();
var_dump($tornado);
$tornado->dump();

$lamborghini = new Car('Yellow',4, 60);
$lamborghini->getNbWheels();
$lamborghini->getCurrentSpeed();
$lamborghini->getColor(); /* Because Yellow is the official color of Langorghini */
$lamborghini->getNbSeats();
$lamborghini->getEnergy();
$lamborghini->getEnergyLevel(60);
$lamborghini->dump();
echo $lamborghini->forward(). "<br>";
echo $lamborghini->brake();
$lamborghini->dump();
