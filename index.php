<?php

Class A {
}

Class B extends A {
	protected $a;
	public function __construct($a){
		$this->a = $a;
	}
}

Class C extends B {
	protected $b;
	
	public function __construct($a, $b) {
		$this->b = $b;
		
		parent::__construct($a);
	}
}

$a1 = new A();
$a2 = new A();
$b3 = new B($a1);
$b4 = new B($b3);
$c5 = new C($a2, $b4);

?>