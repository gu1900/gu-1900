<?php 
//操作类
namespace factroy;

include '../autoload.php';



$numberA = $_POST['numberA'];
$numberB = $_POST['numberB'];
$Symbol = $_POST['Symbol'];
$obj = OperationFactroy::CreateOperation($Symbol);
$obj->setNumber($numberA, $numberB);
$jj =  $obj->getResults();
 
echo json_encode(array(
        'code' => '1',
        'ms' => $jj,
));