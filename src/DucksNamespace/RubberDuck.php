<?php
namespace DucksNamespace;
use \Library\Observable;

class RubberDuck implements Quackable, QuackObservable {
        use Observable;    
        
	public function __construct()
        {
	}
 
	public function quack() 
        {
		echo "Squeak";
		$this->notify();
	}
  
	public function __toString() 
        {
		return "Rubber Duck";
	}

}
