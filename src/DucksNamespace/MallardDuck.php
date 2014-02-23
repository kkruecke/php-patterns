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
	    $this->notify();
	}

	public function __toString() 
        {
	     return "Mallard Duck";
	}
}
