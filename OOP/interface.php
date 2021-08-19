<?php

interface Animals{
    public function makeSound();
}
class Cat implements Animals{
    public function makeSound(){
        echo "Meowww";
    }
}
class Dog implements Animals{
    public function makeSound(){
        echo "Gauuu";
    }
}
class Mouse implements Animals{
    public function makeSound(){
        echo "Chitttt";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = [$cat, $dog, $mouse];

foreach($animals as $animal){
    $animal->makeSound();
    echo "\n";
}
