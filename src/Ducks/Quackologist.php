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
               // The code below works fine even though whoami() is not a method of SplSubject.
               echo ". " . $subject->whoami() . " just quacked.\n\n";
	}
 }
