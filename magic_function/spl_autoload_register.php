<?php
	spl_autoload_register(function ($class){
		include_once "classes/".$class.".php";
	});

	$ft = new first();
	echo $ft->fun();
	$st = new second();
	echo $st->fun1();

?>