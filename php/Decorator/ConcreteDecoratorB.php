<?php 
namespace Decorator;

class ConcreteDecoratorB extends Decorator{//具体装饰类A
	public function __construct(Component $component){
		parent::__construct($component);
	}

	public function operation(){
		parent::operation();//调用装饰类的操作
		$this->addedOperationB();//增加新的操作
	}

	public function addedOperationB(){
		echo "B 加点辣椒!!";
	}

}