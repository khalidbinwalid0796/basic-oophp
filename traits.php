<?php
/***
 * multilevel inheritance k remove korar jonno traits use kora hoy
 *
***/

/*
    class class1{
        function fun1(){
            echo "fun1";
        }
    }

    class class2 extends class1{
        function fun2(){
            echo "fun2";
        }
    }

    class class3 extends class2{
        function fun3(){
            echo "fun3";
        }
    }

    class class4 extends class3{
        function fun4(){
            echo "fun4";
        }
    }
*/

    trait class1{
        function fun1(){
            echo "fun1"."<br>";
        }
    }

    class class2 {
        use class1;
        function fun2(){
            echo "fun2"."<br>";
        }
    }

    $obj = new class2();
    echo $obj->fun1();


    /***
     * multiple trait
     * class & trait a same function thakle class ar function ta call hoy
     * same function in multiple trait then use insteadof or use alias to define specifically
     ***/

    trait t1{
        function f1(){
            echo "t1:f1()";
        }
    }
    trait t2{
        function f1(){
            echo "t2:f1()";
        }
    }
    class class3{
        use t1,t2{
            t1:: f1 insteadof t2;
            t2:: f1 as fun2;
        }
        function f2(){
            echo "class3->t2:f2()";
        }
    }

    $obj3 = new class3();
    echo $obj3->f1()."<br>";
    echo $obj3->fun2()."<br>";

?>