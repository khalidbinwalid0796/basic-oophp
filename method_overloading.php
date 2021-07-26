<?php

/***
* 1ta class a jokhon ake name onekgulo method thake but parameter vinno tokhon overloading ghote.
* overwrite->method name same & also parameter name same
* class ar scope ar baire dynamic method create hoy sei method gulo ee overloading, 
* ai somoy magic method gulo trigger hoy like __call()[when object context] __callStatic[when static context]
*
***/

	class Shape {

		const PI = 3.142 ;

		function __call($name,$arg){
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


		public static function __callStatic($name,$arg){
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