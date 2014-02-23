<?php
namespace DucksNamespace;


class Quackologist implements \SplObserver {

        // Gives error: not compatible with SplObserver::update(\SplSubject $sub) 
	public function update(\SplSubject $subject) 
        {
            if ($subject instanceof QuackObservable) {
                
                $duck = (Quackable) $subject;
                
                echo "Quackologist: " . $duck . " just quacked.";
            }
	}
 
	public function __toString() 
        {
		return "Quackologist";
	}
}
