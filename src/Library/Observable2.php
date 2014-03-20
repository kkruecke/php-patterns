<?php
namespace Library;
/* 
 * trait Observable2 is also a reuseable implementation of the SplSubject interface, to be used within any class that can be observed, 
 * ie acts as a subject. But this version uses SplObjectStorage to allocate
 * It uses 
 */
trait Observable2 { 

   private $observers;
   
   public function allocate_observers_storage()
   {
      $this->observers = new SplObjectStorage();
   }

   public function attach ( \SplObserver $observer )
   {
       $this->observers->attach($observer);
   }

   public function detach( \SplObserver $observer )
   {
      $this->observers->detach($observer);	
   }

   public function notify()
   {
      foreach($this->observers as $observer) {

           $observer->update($this);  // The type of '$this' is that of the derived which has "use Observable".
      }
   }
}
