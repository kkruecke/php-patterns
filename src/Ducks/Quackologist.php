<?php
namespace Ducks;

class Quackologist implements \SplObserver {

        /* This declaration
         *
         *     public function update(\QuackObservable $subject) 
         *
         * gave the error: not compatible with SplObserver::update(\SplSubject $sub) 
         */
	public function update(\SplSubject $subject) 
        {
           if ($subject instanceof QuackObservable) {

               // This would generate a compile error in C++. 
               echo ". " . $subject->whoami() . " just quacked.\n\n";
           } 
	}
 }
