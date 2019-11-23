<?php 
namespace factroy;
//除
class OperationDiv extends operation implements Comput {
	function getResults(){
		if(intval($this->numberB) == 0 ){
			return 'numberB 不能为零!';
		}
		return $this->Result = ($this->numberA / $this->numberB);
	}
}

 ?>