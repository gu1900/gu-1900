<?php 
namespace strategy;
/**
 * 打折算法产品类
 */

class DaZheStrategy extends StrategyAbstract
{
	
	/*
	具体算法实现
	 */
	public function doAction($money)
	{
		echo '打折算法: 原价'.$money..'元';
	}
}