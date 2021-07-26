<?php

	//using magic function

	class MyClass {

	    private $firstField;
	    private $secondField;

	    public function __get($property) {

            if (property_exists($this, $property)) {
            	echo $this->$property."check-this"."<br>";
                return $this->$property."<br>";
            }
	    }

	    public function __set($property, $value) {

	        if (property_exists($this, $property)) {
	            $this->$property = $value;
	        }
	    }
	}

	$myClass = new MyClass();

	$myClass->firstField = "This is a foo line";
	$myClass->secondField = "This is a bar line";

	echo $myClass->firstField."<br>";
	echo $myClass->secondField."<br>";
	
	// $myClass->firstField = "hi";
	// $myClass->secondField = "hmm";

	// echo $myClass->firstField."<br>";
	// echo $myClass->secondField."<br>";


	//using normal function

	class normalClass {

	    private $firstField;
	    private $secondField;

	    public function getFirstField() {
	        return $this->firstField;
	    }

	    public function setFirstField($firstField) {
	        $this->firstField = $firstField;
	    }

	    public function getSecondField() {
	        return $this->secondField;
	    }

	    public function setSecondField($secondField) {
	        $this->secondField = $secondField;
	    }
	}

	$mclass = new normalClass();

	$mclass->setFirstField("This is a foo line");
	$mclass->setSecondField("This is a bar line");

	echo $mclass->getFirstField()."<br>";
	echo $mclass->getSecondField()."<br>";

?>