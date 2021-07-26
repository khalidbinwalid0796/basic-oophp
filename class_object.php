<?php

//Class->categorization of real life object according to it's behaviour(method) and attribute(variable).& user defined data type
//class ar vitore class ar property use korte hole this use korte hobe.
//property ar age access modifier likhte hobe.

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