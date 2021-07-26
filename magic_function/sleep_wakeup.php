<?php

/***
*
    Why serialize()->suppose database or session a data insert korbo. but data ar format object tahole to insert kora jabe na.string a convert korte hobe r string a convert korar jonno serialize() use hoy.r string to object unserialize() use kora hoy.
*
*
***/

/***
*
    sleep()->It is called when the serialize() method is called outside the class
    wakeup()->It is called when the unserialize() method is called outside the class.
*
*
***/

    class Student {
        private $name;
        private $email;
        private $phone;
        private $db_connection_link;
     
        public function __construct($name, $email, $phone) 
        {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }
     
        public function __sleep()
        {
            return array('name', 'email', 'phone');
        }
     
        public function __wakeup()
        {
            $this->db_connection_link = your_db_connection_function();
        }
    }




    class Person {
        public $sex;
        public $name;
        public $age;

        public function __construct($name="",  $age=25, $sex='Male')
        {
            $this->name = $name;
            $this->age  = $age;
            $this->sex  = $sex;
        }

        /**
         * @return array
         */
        public function __sleep() {
            echo "It is called when the serialize() method is called outside the class.<br>";
            $this->name = base64_encode($this->name);
            return array('name', 'age'); // It must return a value of which the elements are the name of the properties returned.
        }

        /**
         * __wakeup
         */
        public function __wakeup() {
            echo "It is called when the unserialize() method is called outside the class.<br>";
            $this->name = 2;
            $this->sex = 'Male';
            // There is no need to return an array here.
        }
    }

    $person = new Person('John'); // Initially assigned.
    var_dump(serialize($person));
    var_dump(unserialize(serialize($person)));
?>