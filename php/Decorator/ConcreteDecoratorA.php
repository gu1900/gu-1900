<?php 
namespace Decorator;

class ConcreteDecoratorA extends Decorator{//具体装饰类A
	public function __construct(Component $component){
		parent::__construct($component);
	}

	public function operation(){
		parent::operation();//调用装饰类的操作
		$this->addedOperationA();//增加新的操作
	}

	public function addedOperationA(){
		echo "A 加点酱油";
	}

}