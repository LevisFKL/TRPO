<?php namespace podolskii;

Class Equation{
	public function solve($a, $b){
			
			if($a == 0){
                return $this->X=NULL;
			}
			return $this->X=array(-($b/$a));
	}
	
	protected $X;
}

?>