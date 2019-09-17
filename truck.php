<?php

/**
 * Truck class.
 * Truck is a subclass of Vehicle, it inherits attributes and methods
 * from its parent.
 *
 * @author  Simplon Clermont <yann+simplon@bouilhac.net>
 * @license https://opensource.org/licenses/MIT  MIT License
 * @link    https://github.com/simplon-clermont/php-classes
 */

require_once 'vehicle.php';

class Truck extends Vehicle {
    // Truck has a specific attribute axles, it is not shared with other vehicles.
    private $_axles;

    /**
     * Class constructor.
     *
     * If we need to add some logic at the subclass initialization (like initializing
     * a class-specific attribute), we redefine the constructor.
     *
     * @param string $brand The brand name.
     * @param string $model The model name.
     * @param int    $year  The year.
     * @param string $color The color of the truck.
     * @param int    $axles The number of axles in the truck.
     */
    function __construct($brand, $model, $year, $color, $axles) {
        // This calls the constructor of the parent class.
        parent::__construct($brand, $model, $year, $color);
        $this->_axles = $axles;
    }

    /**
     * Axles getter.
     *
     * Returns the number of axles of the truck.
     *
     * @return int
     */
    function getAxles() {
        return $this->_axles;
    }

    /**
     * String representation.
     * To differentiate objects we override the string representation.
     *
     * @return string
     */
    function __toString() {
        return "un camion : " . parent::__toString() . " $this->_axles essieux";
    }
}