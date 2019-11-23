<?php 
//定义接口
interface User{
     function getDiscount();
     function getUserType();
}
//VIP用户 接口实现
class VipUser implements User{
      //VIP用户折扣系数
      private $discount = 0.8;
      function getDiscount(){
            return $this->discount;
      }
      function getUserType(){
            return 'VIP';
      }
}
class Goods{
      var $price =100;
      var $vc;
      //定义User接口类型参数，这时并不知道是什么用户
      function run(User $vc){
            $this->vc=$vc;
            $discount = $this->vc->getDiscount();
            $usertype = $this->vc->getUserType();
            echo $usertype.'商品价格：'.$this->price*$discount;
      }
}
$display = new Goods();
echo $display->run(new VipUser());