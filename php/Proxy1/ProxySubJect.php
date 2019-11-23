<?php 
namespace Proxy1;

class ProxySubJect extends SubJect{//代理主题角色

	 private $_real_subject = null;
	 public function __construct(){

	 }

	 public function action(){
	 	$this->_beforeAction();
	 	if(is_null($this->_real_subject)){
            $this->_real_subject = new RealSubJect();
	 	}

         $this->_real_subject->action();
         
         $this->_afterAction();
	 	
	 }
 private function _beforeAction() {
        echo '在action前,我想干点啥....';
    }

    private function _afterAction() {
         echo '在action后,我还想干点啥....';
    }

}