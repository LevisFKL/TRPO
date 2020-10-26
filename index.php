<?php

Class A {
	public function solve($a, $b){
			
			if($a == 0){
			    return NULL;
			}
			return $this->X=-($b/$a);
	}
	
	protected $X;
}

Class B extends A {
	
	protected function dis($a, $b, $c){
		$x = ($b**2)-4*$a*$c;
		return $x;
		}
	
	public function qu_solve($a, $b, $c){
		
		$x = $this->dis($a, $b, $c);
	    
	    if($a == 0){
	        return $this->solve($b,$c);
	    }
	    
		
		
		if ($x > 0){
		    return $this->X=array(
		        -($b+sqrt($b**2-4*$a*$c)/2*$a), 
		        -($b-sqrt($b**2-4*$a*$c)/2*$a)
		        );
		}
		
		if($x == 0){
			return $this->X=array(-($b/2*$a));
		}
		
		return $this->X=NULL;
		
	}
	
}

$a = new A();
$b = new B();
$a->solve(1,2);
$b->qu_solve(0,2,1);

?>