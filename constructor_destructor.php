<?php

//constructor->class ar object jokhon call/create hoy tokhon by default constructor call hoy.
//destructor->object ar life cycle jokhon sesh hoy tokon by default destructor call hoy.

    class class1{

        public $x;

        function __construct($a){
            $this->x = $a;
            echo $this->x."<br>";
            echo "1st call";
        }

        function fun1(){
            echo " then ";
        }

        function __destruct(){
            echo "last call";
        }

    }

    $obj = new class1(10);
    $obj->fun1();
?>