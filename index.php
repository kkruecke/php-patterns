<?php
require "loader/SplClassLoader.php";
use Ducks\Quackologist,
 Ducks\RedheadDuck,
 Ducks\DuckCall,
 Ducks\RubberDuck,
 Ducks\MallardDuck;

$loader1 = new SplClassLoader('Ducks' ,'./src');
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
