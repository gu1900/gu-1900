<?php 
namespace factroy;

class OperationFactroy {
 
	private static $obj;
	
	public static function CreateOperation($type){
		try {
		   $error = "Please input the '+', '-', '*', '/' symbols of Math.";
		   switch($type){
				case '+' :
					self::$obj = new OperationAdd();
					break;
				case '-' :
					self::$obj = new OperationSub();
					break;
				case '*' :
					self::$obj = new OperationMul();
					break;
				case '/' :
					self::$obj = new OperationDiv();
					break;
				default:
					throw new Exception($error);
			}
			return self::$obj;
		
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			exit;
		}
	}
}