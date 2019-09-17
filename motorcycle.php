<?php

/**
 * Motorcycle class.
 * Motorcycle is a subclass of Vehicle, it inherits attributes and methods
 * from its parent.
 *
 * @author  Simplon Clermont <yann+simplon@bouilhac.net>
 * @license https://opensource.org/licenses/MIT  MIT License
 * @link    https://github.com/simplon-clermont/php-classes
 */

require_once 'vehicle.php';

class Motorcycle extends Vehicle {
    /**
     * String representation.
     * To differentiate objects we override the string representation.
     *
     * @return string
     */
    function __toString() {
        return "une moto : " . parent::__toString();
    }
}
