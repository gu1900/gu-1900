<?php 
/*
策略工厂类
 */
namespace strategy;

class StrategyFind{
	private $strategy_mode;

	/*
	初始时,传入具体的策略对象
	 */
	public function __construct($mode){
		$this->strategy_mode = $mode;
	}

	/*
	执行打折算法
	 */
	public function get($money){
		$this->strategy_mode->doAction($money);
	}
}