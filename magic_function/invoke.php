<?php

/***
*
   The __invoke() magic method is a special method which is called when you try to call an object as if it were a function.
   The main purpose of the __invoke() method is that if you want to treat your objects as callable, you can implement this method. 
*
*
***/

    class Student {
        private $name;
        private $email;
     
        public function __construct($name, $email) 
        {
            $this->name = $name;
            $this->email = $email;
        }
     
        public function __invoke()
        {
            echo 'Student object is called as a function!';
        }
    }
     
    $objStudent = new Student('John', 'john@tutsplus.com');
    $objStudent();
?>