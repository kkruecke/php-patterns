<?php
namespace DucksNamespace;
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
}
