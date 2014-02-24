<?php
namespace Ducks;
use \Library\Observable;

class RubberDuck implements Quackable,  \SplSubject {
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
        
        public function whoami() 
        {
	   return "Rbber Duck";
	}

}
