<?php 
//接口的多继承实现
interface father{
	function a();
}
interface mother{
	function b();
}
interface fam{
	function c();
}

class B{
	protected $a = '';
	protected $b = '';
	public function setValue($a,$b){
		$this->a = $a;
		$this->b = $b;
	}
}

class test extends B implements father,mother,fam{
	public function a(){
		echo $this->a.',这样应该不行把,'.$this->b;
	}
	public function b(){
		echo  $this->a.',我觉得不太行,'.$this->b;
	}
	public function c(){
		echo $this->a.',肯定不行呗,'.$this->b;
	}
}
$t = new test();
$t->setValue('亲','你觉得呢?');
echo $t->a();
