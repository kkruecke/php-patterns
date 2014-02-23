<?php
require "loader/SplClassLoader.php";
use DucksNamespace\Quackologist,
 DucksNamespace\RedheadDuck,
 DucksNamespace\DuckCall,
 DucksNamespace\RubberDuck,
 DucksNamespace\MallardDuck;

//use Library\Observable;

$loader1 = new SplClassLoader('DucksNamespace' ,'./src');
$loader2 = new SplClassLoader('Library' ,'./src');
$loader1->register();
$loader2->register();

$array_of_duck = array();

$array_of_ducks[] = new RedheadDuck();
$array_of_ducks[] = new DuckCall();
$array_of_ducks[] = new RubberDuck();
$array_of_ducks[] = new MallardDuck();

$quackologist = new Quackologist();

foreach ($array_of_ducks as $duck) {

   $duck->attach($quackologist);
}

foreach ($array_of_ducks as $duck) {

      $duck->quack(); 
} 
