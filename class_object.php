<?php

/***
 * Why need class and object oriented php ???
 * 
 * school a onek gulo class thake,pottek class ar individual sylebuss,student thake,that means operation gulo 
 * easy hoy suppose delete korte chasse kono 1ta class ba oi class a kisu function add korte chasse only class
 * ar name dhore kaj gulo kora jai.
 * 
 * ai karone big project gulo small class a divide kore project gulo kora hoy.ate coding structure,reusability,
 * understandability bere jai.aikaronee object oriented use kora hoy
 * 
 * Four pillars of object oriented php?????
 * Abstraction,Encapsulation,Polymorphism,Inheritance
 * 
 * ***/

/***
 * 
 * Class->categorization of real life object according to it's behaviour(method) and attribute(variable). 
 * & user defined data type.
 * 
 * 
 * class ar vitore class ar property use korte hole this use korte hobe.
 * property ar age access modifier likhte hobe
 * 
 * ***/


    class Class1{
        //$x = 1; //not allow
        public $x = 1;

        public function fun1(){
            //echo $x; //not allow
            echo $this->x;
        }

    }

    $obj1 = new class1();
    echo $obj1->x."<br>";
    $obj1->fun1();

?>