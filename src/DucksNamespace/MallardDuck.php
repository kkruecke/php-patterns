<?php
namespace DucksNamespace;
use \Library\Observable;

class MallardDuck implements Quackable, QuackObservable {

       use Observable;
 
	public function __construct() 
        {
	}
 
	public function quack() 
        {
	    echo "Quack";
	    $this->notifyObservers();
	}

	public function toString() 
        {
	     return "Mallard Duck";
	}
}
