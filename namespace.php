<?php
    include('test1.php');
    include('test2.php');
    //test2\hellop();

    $obj = new test2\class2;
    $obj->hello();

    use abc\oop\php as tst1; //include na korle namespace kaj kore na
    tst1\hello2();

?>