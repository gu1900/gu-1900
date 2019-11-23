<?php 
class A{
	protected $name ;

function __construct($name){
		$this->name = $name;
	}

	function cs(){
		return $this->name;
	}


}

$b = new A('李四');
//var_dump($b);
echo $b->cs();