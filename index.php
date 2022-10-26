<?php

class Person{
    public $name;
    public $age;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    function getUserDetails(){
        return "Hi, My Name is ".$this->name." and I'm ". $this->age ." old 
";
    }
}

$obj = new Person("Ajay", 23);
echo $obj->getUserDetails();