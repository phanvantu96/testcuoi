<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order
 *
 * @author Administrator
 */
    class Order {
        
        var $OrderId = null;
        var $DataCreate = null;
        var $Total = null;
        var $UserId =  null;
        
    public function __construct() {
        
    }
    function getListOrder(){
        $db = new connect();
        $select = "select * from `order`";
        $result = $db->getList($select);
        return $result;
    }
    public function CreateOder($customerID){
        $db= new connect();
        $date = new DateTime("now");
        $dateCreate = date('Y-m-d');
        $select = "INSERT INTO `order` values('NULL','$dateCreate','0','$customerID')";
        $db->exec($select);
      
       $int = $db->getInstance("SELECT `orderId` from `order` order by `orderId` DESC limit 1");
       return $int[0];
        
       
    }
    public function insertOderDetail($orderID,$proID,$price,$Quantily,$Total){
        $db = new connect();
        $strQuery = "INSERT INTO `order_detail` values ('$orderID','$proID','$price','$Quantily','$Total')";
        $result = $db->exec($strQuery);
    }
     public function updateOderTotal($oderID,$Total){
        $db = new connect();
        $strQuery = "UPDATE `order` SET `total` = $Total WHERE `OrderId` = $oderID";
        $result = $db->exec($strQuery);
    }
    public function getOrder($orderID){
        $db= new connect();
        $select = "SELECT * FROM `order` WHERE OrderId='$orderID'";
        $result = $db->getList($select);
        return $result->fetchAll();
    }
    public function getOderDetail($orderID){
        $db= new connect();
        $select= "select m.`ProId`, `ProName` , `quanlity` , od.`ProPrice`, `Total` from `order_detail` as od inner join `products` as m on od.`ProId`=m.`ProId` WHERE OrderId = '$orderID'";
        $result = $db->getList($select);
        return $result->fetchAll();
    }
    public function getDateOrder($date){
        $db= new connect();
        $select= "SELECT `order`.OrderID,DateCreate,ProId,ProPrice,quanlity,`order_detail`.Total,UserID from `order` INNER JOIN `order_detail` ON `order`.OrderID = `order_detail`.OrderID  WHERE `order`.DateCreate = '$date'";
        $result = $db->getList($select);
        return $results = $result->fetchAll();
       
    }
     public function getIdOrder($id){
        $db= new connect();
        $select= "SELECT `order`.OrderID,DateCreate,ProId,ProPrice,quanlity,`order_detail`.Total,UserID FROM `order` INNER JOIN `order_detail` ON `order`.OrderID = `order_detail`.OrderID WHERE `order`.OrderId = '$id'";
        $result = $db->getList($select);
        return $results = $result->fetchAll();
       
    }
    public function getOrderDetails(){
        $db = new connect();
        $select = "select `order`.OrderID,DataCreate,ProId,ProPrice,quanlity,`order_detail`.Total,UserID from `order` INNER JOIN `order_detail` ON `order`.OrderID = `order_detail`.OrderID";
        $result = $db->getInstance($select);
        return $result;
    }
}

?>
