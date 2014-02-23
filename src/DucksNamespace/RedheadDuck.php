<?php
namespace DucksNamespace;
use Library\Observable;

class RedheadDuck implements Quackable, QuackObservable {
    
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
		return "Redhead Duck";
	}
}
