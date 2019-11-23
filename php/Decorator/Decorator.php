<?php 
namespace Decorator;

abstract class Decorator implements Component{
	/*
	abstract: 1.使用abstract修饰的类表示该类为抽象类,
              2.使用abstract修饰的方法表示这个方法是一个抽象方法.
              3.抽象方法只有方法声明,而没有方法的实现类容.
              4.抽象类不能被实例化,通常是将抽象方法作为子类方法重写使用的,并且要把继承的抽象类里的方法都实现.
	 */
	protected $_component;
	public function __construct($component){
		$this->_component = $component;
	}

	public function operation(){
		$this->_component->operation();
	}
}