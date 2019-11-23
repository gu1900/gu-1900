<?php 
namespace Decorator;

include '../autoload.php';

$component = new ConcreteComponent();
$decoratorA = new ConcreteDecoratorA($component);
$decoratorB = new ConcreteDecoratorB($decoratorA);

$decoratorA->operation();//输出：A加点酱油;
echo '<br>--------<br>';
$decoratorB->operation();//输出：A加点酱油;B加点辣椒;
