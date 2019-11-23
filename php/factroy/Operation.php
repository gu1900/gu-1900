<?php
namespace factroy;

class Operation {
	protected $numberA = 0;
	protected $numberB = 0;
	protected $Result = 0;

	//设置参数
	 function setNumber($numberA,$numberB){
	 	$this->numberA = $numberA;
	 	$this->numberB = $numberB;
	 }

	 //归零
	 
	 function setResult(){
	 	$this->Result = 0;
	 }
}