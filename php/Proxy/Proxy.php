<?php 
namespace Proxy;

//设置代理对象,
/*
 *保存一个引用,使得代理可以访问实体,并提供一个与SubJect接口相同的接口,这样代理可以用来代替实体(RealSubJect);
 */
class Proxy implements SubJect{
	private $realSubject = null;
    private $name = '';
	function __construct(realSubJect $realSubject=null){

        if(empty($realSubject)){
        	$this->realSubject = new RealSubJect($this->name);
        }else{
        	$this->realSubject = $realSubject;
        }
	}

			function say(){
			    $this->realSubject->say();
				//return $res.'哈哈哈';
			}
			function run(){
				$this->realSubject->run();
			}
			function look(){
				echo '你看那个人好像一条狗诶!!!<br>';
			}
}