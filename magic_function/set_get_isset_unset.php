<?php


/***
*
    The __set() magic method is called when you try to set data to inaccessible or non-existent object properties. 
    The purpose of this method is to set extra object data for which you haven’t defined object properties explicitly.
*
*
***/

/***
*
    The __get() method is exactly the opposite of it. The __get() magic method is called when you try to read data from inaccessible or non-existent object properties. The purpose of this method is to provide values to such properties.
*
*
***/

/***
*
    The __isset() magic method is called when you call the isset() method on inaccessible or non-existent object properties.
*
*
***/

/***
*
    the __unset() is a method called when you call the unset() method on inaccessible or non-existent object properties.
*
*
***/

    class Example {
        private $data = [];

        public function __set($name, $value) {
            $this->data[$name] = $value;
        }

        public function __get($name) {
            if (!array_key_exists($name, $this->data)) {
                return null;
            }

            return $this->data[$name];
        }

        public function __isset($name) {
            return isset($this->data[$name]);
        }

        public function __unset($name) {
            unset($this->data[$name]);
        }
    }

    $example = new Example();

    // Stores 'a' in the $data array with value 15
    $example->a = 15;

    // Retrieves array key 'a' from the $data array
    echo $example->a; // prints 15

    // Stores 'b' in the $data array with value 25
    $example->b = 25;

    // Attempt to retrieve non-existent key from the array returns null
    echo $example->b; // prints nothing

    // If __isset('a') returns true, then call __unset('a')

    if(isset($example->a)){
        unset($example->a);
    }

?>    