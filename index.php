<?php

/**
 * Main script.
 *
 * @author  Simplon Clermont <yann+simplon@bouilhac.net>
 * @license https://opensource.org/licenses/MIT  MIT License
 * @link    https://github.com/simplon-clermont/php-classes
 */

// The Car class is defined in car.php.
require_once 'car.php';
// The Motorcycle class is defined in motorcycle.php.
require_once 'motorcycle.php';
// The Truck class is defined in motorcycle.php.
require_once 'truck.php';

// We create a new instance of the Car class with the keyword "new".
// The 5 strings are the 5 parameters of the class constructor (see car.php line 31).
$myCar = new Car('Renault', 'Clio', '2010', 'Rouge', 5);

echo "Mon véhicule est $myCar."; // output: Renault Clio Rouge (2010)
echo "<br/>" . PHP_EOL;


// echo $myCar->brand;
// This does not work because brand is a protected attribute.
// We must use the getter we defined.
echo "Marque de ma voiture : " . $myCar->getBrand(); // output: Renault
echo "<br/>" . PHP_EOL;

echo "Nombre de places de ma voiture : " . $myCar->getSeats(); // output: 5
echo "<br/>" . PHP_EOL;


echo "Couleur de ma voiture : " . $myCar->getColor(); // output: Rouge
echo "<br/>" . PHP_EOL;
$myCar->setColor("Blanche");
echo "Couleur de ma voiture : " . $myCar->getColor(); // output: Blanche
echo "<br/>" . PHP_EOL;


echo "Vitesse de ma voiture : " . $myCar->getSpeed(); // output: 0
echo "<br/>" . PHP_EOL;

$myCar->speedUp(10);
echo "Vitesse de ma voiture : " . $myCar->getSpeed(); // output: 10
echo "<br/>" . PHP_EOL;

$myCar->speedUp(20);
echo "Vitesse de ma voiture : " . $myCar->getSpeed(); // output: 30
echo "<br/>" . PHP_EOL;

$myCar->slowDown(5);
echo "Vitesse de ma voiture : " . $myCar->getSpeed(); // output: 25
echo "<br/>" . PHP_EOL;

$myCar->slowDown(30);
echo "Vitesse de ma voiture : " . $myCar->getSpeed(); // output: -5
echo "<br/>" . PHP_EOL;

echo "<br/>" . PHP_EOL;
echo "<br/>" . PHP_EOL;



$myMoto = new Motorcycle('Yamaha', 'XJR1200', '1997', 'Noire');
$myMoto2 = new Motorcycle('Renault', 'Megane', '2000', 'Bleue');

echo "Mon second véhicule est $myMoto.";
echo "<br/>" . PHP_EOL;
echo "Mon troisième véhicule est $myMoto2.";
echo "<br/>" . PHP_EOL;



$myTruck = new Truck('DAF', 'XF', '2018', 'Bleu', 4);

echo "Mon quatrième véhicule est $myTruck.";
echo "<br/>" . PHP_EOL;

