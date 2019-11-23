<?php 
namespace strategy;

abstract class StrategyAbstract{
	/*
	具体活动算法方法
	 */
	public abstract function doAction($money);
}