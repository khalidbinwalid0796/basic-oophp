<?php

/***
 * object create kora lage na ty construct o call hoy na
 * static variable k static method ar moddhe call korte hole self::variable_name use kora hoy
 * jokhon construct call na kore only 1ta function call kora lage tokhon static method lage
***/

    class class1{
        static public $num = 10;

        function __construct(){
            echo "constructor ...";
        }

        static function fun1(){
            echo "This is static method and value is".self::$num;
        }
    }

    echo class1::$num."<br>";
    echo class1::fun1();

?>