Reusable Obserable trait
========================

Reuseable Observer Pattern implementation. This code uses the ``trait Observable`` to implement reusable observer code. The example obsever is  
Quackologist. A Quackologist observes various types of duck classes that implement the interfaces **\SplSubject** and **Quackable**. 

    class Quackologist implements \SplObserver {

      public function update(\SplSubject $subject) 
      {
         echo ". $subject->whoami() . " just quacked.\n\n";
      }
    }

**Observable** is the reusable implementation of the **SplSubject** abstract methods.

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
  
             $observer->update($this);  
        }
     }
   }
  
The subject duck classes implement quack(), from the Quackable interface, and whoami().

    interface Quackable  {

      function quack(); 
    }
 
    class RedheadDuck implements Quackable, \SplSubject {
        use Observable; 

	public function __construct() {}

	public function quack() 
        {
	   echo "Quack";
	   $this->notify();
	}
       	public function whoami() { return "Redhead Duck"; }
    }

The main code instantiates ducks and then attaches a Quackologist observer to each.

    $array_of_duck = array();

    $array_of_ducks[] = new RedheadDuck();
    //. . . snip

    $quackologist = new Quackologist();

    foreach ($array_of_ducks as $duck) {
    
       $duck->attach($quackologist);
    }
    
    foreach ($array_of_ducks as $duck) {
    
       $duck->quack(); 
    } 

Note
----

Even though **Quackologist::update(\SplSubject)** takes a reference to \SplSubject, this will not result in a compile error, unlike in C++, which would complain

    error: no member named 'whoami' in 'Base'
 
because Base has not whoami() method. As long as you pass at runtime a class derived from **\SplSubject** that implements **whoami()**, this code will work. Only if
--at runtime--you pass an SplSubject instance that does not implement whoami() will you get an error. 
