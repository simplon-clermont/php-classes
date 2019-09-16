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

// We create a new instance of the Car class with the keyword "new".
// The 4 string are the 4 parameters of the class constructor (see car.php line 40).
$myCar = new Car('Renault', 'Clio', '2010', 'Rouge');

echo "Ma voiture est une $myCar."; // output: Renault Clio Rouge (2010)
echo "<br/>" . PHP_EOL;


// echo $myCar->_brand;
// This does not work because _brand is a private attribute.
// We must use the getter we defined.
echo "Marque de ma voiture : " . $myCar->getBrand(); // output: Renault
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
