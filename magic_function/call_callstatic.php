<?php


/***
*
    If __get() and __set() methods are called when you’re dealing with non-existent properties, the __call() method is called when you’re trying to invoke inaccessible methods, the methods that you haven’t defined in your class.
*
*
***/

/***
*
    The __callStatic() method is very similar to the __call() method; the only exception is that it’s called when you’re trying to invoke inaccessible methods in a static context. So if you’re trying to access any static method which is not defined, the __callStatic() function will be called.
*
*
***/


    class Shape {

        const PI = 3.142 ;

        function __call($name,$arg){  //1st parameter method_name & 2nd parameter array
            if($name == 'area')

            switch(count($arg)){

                case 0 : 
                    return 0 ;

                case 1 : 
                    return self::PI * $arg[0] ;

                case 2 : 
                    return $arg[0] * $arg[1];

            }
        }


        public static function __callStatic($name,$arg){ //1st parameter method_name & 2nd parameter array
            if($name == 'area')

            switch(count($arg)){

                case 0 : 
                    return 0 ;

                case 1 : 
                    return self::PI * $arg[0] ;

                case 2 : 
                    return $arg[0] * $arg[1];

            }
        }
   }

   //object context
   $circle = new Shape();
   echo "Object Context ".$circle->area(3)."<br>"; //area method is not defined in class
   $rect = new Shape();
   echo "Object Context ".$rect->area(8,6)."<br>";


   //static context
   echo "Static Context ".Shape::area(3,4)."<br>";

?>    