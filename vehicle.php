<?php

/**
 * Vehicle class.
 * A class defines the attributes and methods that represent an object, here a vehicle.
 *
 * @author  Simplon Clermont <yann+simplon@bouilhac.net>
 * @license https://opensource.org/licenses/MIT  MIT License
 * @link    https://github.com/simplon-clermont/php-classes
 */

class Vehicle {
    /**
     * Attributes.
     *
     * An attribute can be:
     *  - public => it is accessible by anyone ($object->publicAttribute)
     *  - private => only the class itself can access it ($object->_privateAttribute)
     *  - protected => only the class and its subclasses can access it
     * Attributes can be initialized with a static value within their definition.
     */
    protected $brand;
    protected $model;
    protected $year;
    protected $color;
    protected $speed = 0;


    /**
     * Class constructor.
     *
     * This method is called when a new object is initialized.
     * It can have parameters, usually values to initialize attributes.
     *
     * @param string $brand The brand name.
     * @param string $model The model name.
     * @param int    $year  The year.
     * @param string $color The color of the vehicle.
     */
    function __construct($brand, $model, $year, $color) {
        // To access an attribute from within a method, with use the "$this" keyword.
        // It refers to the object itself.
        $this->brand = $brand;
        $this->model = $model;
        $this->year  = $year;
        $this->color = $color;
        // This is unnecessary as speed has already been initialized at line 26.
        $this->speed = 0;
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
     * Returns the vehicle brand.
     *
     * @return string
     */
    function getBrand() {
        return $this->brand;
    }

    /**
     * Model getter.
     *
     * Returns the vehicle model.
     *
     * @return string
     */
    function getModel() {
        return $this->model;
    }

    /**
     * Year getter.
     *
     * Returns the vehicle year.
     *
     * @return string
     */
    function getYear() {
        return $this->year;
    }

    /**
     * Color getter.
     *
     * Returns the vehicle color.
     *
     * @return string
     */
    function getColor() {
        return $this->color;
    }

    /**
     * Color setter.
     *
     * Update the vehicle color.
     *
     * @param string $color The new color.
     *
     * @return void
     */
    function setColor($color) {
        $this->color = $color;
    }

    /**
     * Speed getter.
     *
     * Returns the vehicle speed.
     *
     * @return string
     */
    function getSpeed() {
        return $this->speed;
    }

    /**
     * Increase vehicle speed.
     *
     * @param int $acceleration How much to increase speed.
     *
     * @return void
     */
    function speedUp($acceleration) {
        $this->speed += $acceleration;
        // We could add some logic here (test acceleration, max speed…).
    }

    /**
     * Decrease vehicle speed.
     *
     * @param int $deceleration How much to decrease speed.
     *
     * @return void
     */
    function slowDown($deceleration) {
        $this->speed -= $deceleration;
        // We could add some logic here (test deceleration, speed is not negative…).
    }

    /**
     * String representation.
     *
     * @return string
     */
    function __toString() {
        return "$this->brand $this->model $this->color ($this->year)";
    }
}
