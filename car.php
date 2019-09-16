<?php

/**
 * Car class.
 * A class defines the attributes and methods that represent an object, here a car.
 *
 * @author  Simplon Clermont <yann+simplon@bouilhac.net>
 * @license https://opensource.org/licenses/MIT  MIT License
 * @link    https://github.com/simplon-clermont/php-classes
 */

class Car {
    /**
     * Attributes.
     *
     * An attribute can be:
     *  - public => it is accessible by anyone ($object->publicAttribute)
     *  - private => only the class itself can access it ($object->_privateAttribute)
     * Attributes can be initialized with a static value within their definition.
     */
    private $_brand;
    private $_model;
    private $_year;
    private $_color;
    private $_speed = 0;


    /**
     * Class constructor.
     *
     * This method is called when a new object is initialized.
     * It can have parameters, usually values to initialize attributes.
     *
     * @param string $brand The brand name.
     * @param string $model The model name.
     * @param int    $year  The year.
     * @param string $color The color of the car.
     */
    function __construct($brand, $model, $year, $color) {
        // To access an attribute from within a method, with use the "$this" keyword.
        // It refers to the object itself.
        $this->_brand = $brand;
        $this->_model = $model;
        $this->_year  = $year;
        $this->_color = $color;
        // This is unnecessary as _speed has already been initialized at line 26.
        $this->_speed = 0;
    }

    /**
     * Getters and setters.
     *
     * To allow access to private attributes to external code, we need methods
     * called getters (to retreive value) and setters (to update value).
     * If an attribute is not alterable (in our case brand will never change),
     * there is no setter.
     * If an attribute has only internal purpose and should not be visible at all
     * from outside the class, there is no getter either.
     */

    /**
     * Brand getter.
     *
     * Returns the car brand.
     *
     * @return string
     */
    function getBrand() {
        return $this->_brand;
    }

    /**
     * Model getter.
     *
     * Returns the car model.
     *
     * @return string
     */
    function getModel() {
        return $this->_model;
    }

    /**
     * Year getter.
     *
     * Returns the car year.
     *
     * @return string
     */
    function getYear() {
        return $this->_year;
    }

    /**
     * Color getter.
     *
     * Returns the car color.
     *
     * @return string
     */
    function getColor() {
        return $this->_color;
    }

    /**
     * Color setter.
     *
     * Update the car color.
     *
     * @param string $color The new color.
     *
     * @return void
     */
    function setColor($color) {
        $this->_color = $color;
    }

    /**
     * Speed getter.
     *
     * Returns the car speed.
     *
     * @return string
     */
    function getSpeed() {
        return $this->_speed;
    }

    /**
     * Increase car speed.
     *
     * @param int $acceleration How much to increase speed.
     *
     * @return void
     */
    function speedUp($acceleration) {
        $this->_speed += $acceleration;
        // We could add some logic here (test acceleration, max speed…).
    }

    /**
     * Decrease car speed.
     *
     * @param int $deceleration How much to decrease speed.
     *
     * @return void
     */
    function slowDown($deceleration) {
        $this->_speed -= $deceleration;
        // We could add some logic here (test deceleration, speed is not negative…).
    }

    /**
     * String representation.
     *
     * @return string
     */
    function __toString() {
        return "$this->_brand $this->_model $this->_color ($this->_year)";
    }
}