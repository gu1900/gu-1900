<?php
namespace Proxy;

/*
 Proxy: 代理对象
 RealSubJect: 真正主题角色,定义了代理对象Proxy所代表的真正实体
 */
//定义RealSubJect和Proxy共同具备的东西
interface Subject{
	function say();
	function run();
}