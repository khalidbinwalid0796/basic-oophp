<?php

//to prevent overwrite parent class's method in child class
	class class1{

		public final function fun(){
			echo "final method can not overwrite in child class";
		}

	}
	// class class2 extends class1{
	// 	public function fun(){
	// 		echo "final method can not overwrite in child class";
	// 	}
	// }

	$obj = new class1();
	$obj->fun();
?>