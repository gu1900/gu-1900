<?php 
namespace Proxy;

//设置真正主题角色, 定义Proxy(代理对象)所代表的的实体
class RealSubJect implements SubJect{
	private $name = '';

	public function __construct($name=''){
		$this->name = $name;
	}

	function say(){
		echo $this->name.'在吃饭<br>';
	}

    function run(){
    	echo $this->name."在跑步<br>";
    }

}