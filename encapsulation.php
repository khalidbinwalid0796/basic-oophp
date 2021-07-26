<?php

/***
 * 

    wrapping of properties(data) & methods in a class.protection mechanism for properties & methods.
    hiding real implementation of data from user.


 * using protected, value of $num can not be updated outside the class.
 * protected variable k extends kore child class a use kora jai but class ar baire access kora jai na.
 * private variable k extends class a & class ar baire theke access kora jai na.
 * public class ar vitore, baire, extends class a use kora jai.
 *
 * all above is same for function
 *
 ***/

    class Class1{
        //public $num;
        protected $num;
        //private $name;
        function __construct(){
            $this->num = 1;//default access level public
            //$self::name = "sakib"; //not sure check it
        }

        protected function getData(){
            echo "Accessible in extends class"."<br>";
        }

    }

    class class2 extends Class1{
        function getNum(){
            return $this->num;
        }

        function gtData(){
            $this->getData();
        }
    }

    $obj = new Class2();
    //$obj->num = 2;//class ar baire class ar variable ar value change kora jasse ata to thik na vul.
    echo $obj->getNum();
    echo $obj->gtData();

?>