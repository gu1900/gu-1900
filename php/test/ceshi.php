<?php 
  class MyClass
    {
        public $public = 'Public';
        protected $protected = 'Protected';
        private $private = 'Private';

        function printHello()
        {
            echo $this->public;
            echo $this->protected;
            echo $this->private;
        }
    }


     class MyClass2 extends MyClass
    {
        // 可以对 public 和 protected 进行重定义，但 private 而不能
        public $protected = '呵呵';

        function printHello()
        {
            echo $this->public;
            echo $this->protected;
            echo $this->private;
        }
    }

    $obj2 = new MyClass2();
    //echo $obj2->public; // 这行能被正常执行
    //echo $obj2->private; // 未定义 private
     echo $obj2->protected; // 这行会产生一个致命错误
     $obj2->printHello(); // 输出 Public、Protected2 和 Undefined
