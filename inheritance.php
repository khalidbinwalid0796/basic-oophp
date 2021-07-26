<?php

   //parent class
   //code duplication komanor jonno inheritance dorkar

    class class1{
        public $num;
        function __construct(){
            $this->num=1;
            echo "class1 construct<br>";
        }
        function func1(){
            echo "class1 function<br>";
        }
    }

    //child class
    class class2 extends class1{
        function __construct(){
            $this->num=2;
            echo "class2 construct<br>";
            //parent::__construct(); //parent construct call
            //parent::fun1(); //inherit na kore aivabe child class a parent ar method use kora jai
        }
        function func1(){
            echo "class2 function<br>";
        }
    }

    $obj = new class2();
    //class2() ar object create korar por class2 ar constructor call hobe.class1 & class2 a same method thakle class2 ar method ta call hobe.
    echo $obj->num."<br>";
    $obj->func1();

?>