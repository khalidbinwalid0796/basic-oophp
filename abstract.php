<?php
/***
* Abstract class & function starts with abstract keyword.
* Abstract class contains at least one abstract function.
* In parent class, abstract function is only declared & child class contain body part of abstract function
* Abstract class could not create object.
*
*
* Why Abstract??
* child class jokhon parent class kisu method inherit korte baddho hoy tokhon abstract class & method used.parent class ar instance jokhon create kora lage na tokhon abstract use hoy.
*
***/

    abstract class Vehicle {

        protected $litre;

        public function setLitre($value) {
            $this->litre = $value;
        }

        abstract public function calcMiles();
    }

    class Toyota extends Vehicle {
        public function calcMiles() {
            return $this->litre * 20;
        }
    }

    class Mahindra extends Vehicle {
        public function calcMiles() {
            return $this->litre * 18;
        }
    }

    $toyota = new Toyota();
    $mahindra = new Mahindra();

    $toyota->setLitre(10);
    $mahindra->setLitre(10);

    echo $toyota->calcMiles();
    echo "<br>";
    echo $mahindra->calcMiles();

?>