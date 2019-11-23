<?php
abstract class AbstractClass{
      //定义抽象方法
      abstract protected function getValue();

      abstract protected function getclass();
      //普通方法
      public function printOut(){
            echo $this->getValue();
      }
      public function cs(){
      	echo '看起来还不错!';
      }
}
 
class CommonClass extends AbstractClass{
      protected function getValue(){
            return "抽象方法的实现";
      }
      public function getclass(){
            echo '这样可以么';
      }
}
 
$class1 = new CommonClass();
echo $class1->getclass();
echo "\n";
echo $class1->cs();