<?php 
namespace Proxy;
include '../autoload.php';

$subject = new RealSubJect('lisi');
// var_dump($subject);die;
$proxy = new Proxy($subject);
$proxy->say();
$proxy->run();
$proxy->look();