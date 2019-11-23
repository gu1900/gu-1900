<?php 
namespace factroy;

//减
class OperationSub extends operation implements Comput {
	function getResults(){
		return $this->Result = ($this->numberA - $this->numberB);
	}
}
