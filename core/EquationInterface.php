<?php namespace core;
	
interface EquationInterface {


    /**
     * @param float $a
     * @param float $b
     * @param float $c
     * @return array
     */
    public function qu_solve($a, $b, $c);
}

?>