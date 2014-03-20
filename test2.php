<?php

class Base {}

class DerivedCommonBase extends Base {

 public function whoami() { echo "I am DerivedCommonBase\n"; }
}

class Derived1 extends Base {

 public function whoami() { echo "I am Derived1\n"; }
}

class Derived2 extends Base {

 public function whoami() { echo "I am Derived2\n"; }
}

class Test {
 public function do_test(Base $b)
 {   $b->whoami(); }
}

$b = new Base();
$d1 = new Derived1();
$d2 = new Derived2();

$a = array();

$a[] = $d1;
$a[] = $d2;

$t = new Test();

foreach($a as $x) {
  echo  $t->do_test($x);
}

$t->do_test($d1);
$t->do_test($d2);
$t->do_test($b); // this will fail at runtime
