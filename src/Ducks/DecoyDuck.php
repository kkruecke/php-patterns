<?php
namespace Ducks;
use \Library\Observable;

class DecoyDuck implements Quackable, \SplSubject {

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
 /*
	public void registerObserver(Observer observer) 
        {
		observable.registerObserver(observer);
	}

	public void notifyObservers() {
		observable.notifyObservers();
	}
 */
	public function __toString() 
        {
		return "Decoy Duck";
	}
        
        public function whoami() 
        {
		return "Decoy Duck";
	}
}
