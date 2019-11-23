<?php 
namespace factroy;

//加 加法类
class OperationAdd extends operation implements Comput {
	function getResults(){
		return $this->Result = ($this->numberA + $this->numberB);
	}
}

 ?>