<?php

/***
*
 The __toString() magic method allows you to define what you would like to display when an object of the class is treated like a string.If you use echo or print on your object, and you haven’t defined the __toString() method, it’ll give an error.
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
 
    public function __toString()
    {
        return 'Student name: '.$this->name
        . '<br>'
        . 'Student email: '.$this->email;
    }
}
 
$objStudent = new Student('John', 'john@tutsplus.com');
echo $objStudent;
?>