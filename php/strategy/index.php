<?php 
namespace strategy;
include '../autoload.php';
//满减
$model = new StrategyFind(new ManJianStrategy());
$model->get(100);