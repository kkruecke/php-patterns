<?php
namespace Library;
/* 
 * trait Observable is a reuseable implementation of the SplSubject interface, to be used within any class that can be observed, ie acts as a subject. 
 */
trait Observable { 

   private $observers = array();

   public function attach ( \SplObserver $observer )
   {
       $this->observers[spl_object_hash($observer)] = $observer;
   }

   public function detach( \SplObserver $observer )
   {
      unset($this->observers[spl_object_hash($observer)]);	
   }

   public function notify()
   {
      foreach($this->observers as $observer) {

           $observer->update($this);  // The type of '$this' is that of the derived which has "use Observable".
      }
   }
}
