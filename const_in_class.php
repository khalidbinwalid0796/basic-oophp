<?php

/***
* const keyword use kora best.
* class ar name sathe :: use kore class ar baire direct access kora jai
* class ar vitore function ar moddhe self::const_name die access kora jai
***/

	class class1{
		const PI = 3.1416;

		private const NAME = "sakib";
		protected const VALUE = 75;

		public function fun(){
			echo self::NAME;
			echo self::VALUE;
		}
	}

	echo class1::PI;

	$obj = new class1();
	$obj->fun();

?>