<?php
namespace DucksNamespace;


class Quackologist implements \SplObserver {

        // Gives error: not compatible with SplObserver::update(\SplSubject $sub) 
	public function update(\SplSubject $subject) 
        {
            if ($subject instanceof QuackObservable) {
                
                
                echo "Quackologist: " . $subject->__toString() . " just quacked.\n";
                echo "Again Quackologist: " . $subject . " just quacked.\n\n";
            }
	}
 
	public function __toString() 
        {
		return "Quackologist";
	}
}
