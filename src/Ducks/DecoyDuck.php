<?php
namespace Ducks;
use \Library\Observable;

class DecoyDuck implements Quackable, QuackObservable {

	use Observable;

	public function __construct() 
        {
         //		observable = new Observable(this);
	}
 
	public function quack() 
        {
	      echo "<< Silence >>";
	      $this->notifyObservers();
	}

	public function __toString() 
        {
		return "Decoy Duck";
	}
        
        public function whoami() 
        {
		return "Decoy Duck";
	}
}
