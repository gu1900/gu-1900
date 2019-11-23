<?php 
namespace factroy;
//乘
class OperationMul extends operation implements Comput {
	function getResults(){
		return $this->Result = ($this->numberA * $this->numberB);
	}
}

