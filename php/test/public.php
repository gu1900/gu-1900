<?php 
class A{
	public $a = '99';
	protected $b = '你好';
	private $c = '你是得不到我的';

	public function getValue(){
		return $this->b;
	}
}


$a = new A();
echo $a->getValue();