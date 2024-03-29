<?php

/**
 * Car class.
 * Car is a subclass of Vehicle, it inherits attributes and methods
 * from its parent.
 *
 * @author  Simplon Clermont <yann+simplon@bouilhac.net>
 * @license https://opensource.org/licenses/MIT  MIT License
 * @link    https://github.com/simplon-clermont/php-classes
 */

require_once 'vehicle.php';

class Car extends Vehicle {
    // Car has a specific attribute seats, it is not shared with other vehicles.
    private $_seats;

    /**
     * Class constructor.
     *
     * If we need to add some logic at the subclass initialization (like initializing
     * a class-specific attribute), we redefine the constructor.
     *
     * @param string $brand The brand name.
     * @param string $model The model name.
     * @param int    $year  The year.
     * @param string $color The color of the car.
     * @param int    $seats The number of seats in the car.
     */
    function __construct($brand, $model, $year, $color, $seats) {
        // This calls the constructor of the parent class.
        parent::__construct($brand, $model, $year, $color);
        $this->_seats = $seats;
    }

    /**
     * Seats getter.
     *
     * Returns the number of seats in the car.
     *
     * @return int
     */
    function getSeats() {
        return $this->_seats;
    }

    /**
     * String representation.
     * To differentiate objects we override the string representation.
     *
     * @return string
     */
    function __toString() {
        return "une voiture : $this->brand $this->model $this->_seats places $this->color ($this->year)";
    }
}