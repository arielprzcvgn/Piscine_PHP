<?php

abstract class Fighter
{
    abstract function fight($target);

    private $typeF;

	function __construct($type) {
		$this->typeF = $type;
	}
	function getType() {
		return ($this->typeF);
    }
    
    function __clone() {}
}

?>