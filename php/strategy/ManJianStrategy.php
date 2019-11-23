<?php 
namespace strategy;

/**
 * 满减算法产品类
 */
class ManJianStrategy extends StrategyAbstract
{
	
	public function doAction($money)
	{
		 echo '满减算法：原价'. $money .'元';
	}
}