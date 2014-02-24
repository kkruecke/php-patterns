<?php
namespace Ducks;
use \Library\Observable;

class DuckCall implements Quackable, \SplSubject {

	//Observable observable;
	use Observable;

	public function __construct() 
        {
            $debug = 10;
	}
 
	public function quack() 
        {
	      echo "<< Duck Call >>";
	      $this->notify();
	}

	public function __toString() 
        {
		return "Duck Call";
	}
        
        public function whoami() 
        {
		return "Duck Call";
	}
}
