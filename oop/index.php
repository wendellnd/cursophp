<?php 

class Person {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function speakName() {
        return "Hello";
    }

    public function __toString() {
        return "My name is ".$this->name;
    }

    //public function __destruct() {
    //    echo "Oh no, you destroyed me";
    //}
}

$wends = new Person("Wends");

echo $wends->speakName() . "<br>";
echo $wends . "<br>";


?>