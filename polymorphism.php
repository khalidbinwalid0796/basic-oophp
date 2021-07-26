<?php

/***
 * same operation behave differently in different class
 * Abstract class with polymorphism
 * Interface class with polymorphism
 ***/

    //using abstract
//    abstract class class1{
//        abstract function fun1();
//    }
//    class class2 extends class1{
//        function fun1(){
//            echo "fun1";
//        }
//    }
//    class class3 extends class1{
//        function fun1(){
//            echo "fun2";
//        }
//    }
//    $obj = new class2();
//    echo $obj->fun1();

    //using interface
    interface class1{
        function fun1();
    }
    class class2 implements class1{
        function fun1(){
            echo "fun1";
        }
    }
    class class3 implements class1{
        function fun1(){
            echo "fun2";
        }
    }
    $obj = new class2();
    echo $obj->fun1();
?>