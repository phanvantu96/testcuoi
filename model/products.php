<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of products
 *
 * @author MINHDUC
 */
class products {
    //put your code here
    var $ProID = null;
    var $ProName = null;
    var $ProDesc =  null;
    var $ProPrice = null;
    var $ProImages = null;
    var $ProImages1 = null;
    var $ProImages2 = null;
    var $ProImages3 = null;
    var $ProImages4 = null;
    var $ProImages5 = null;
    var $ProImages6 = null;
    
    public function getListPro(){
        $db = new connect();
        $select = "select * from products";
        $result = $db->getList($select);
        return $result;
    }
    public function getListProById($id){
        $db = new connect();
        $select = "select * from products where ProID = '$id'";
        $result = $db->getList($select);
        return $result;
    }
    public function insertPro($name,$desc,$price,$img_name,$img_name1,$img_name2,$img_name3,$img_name4,$img_name5,$img_name6){
        $db = new connect();
        $query = "insert into products(ProName,ProDesc,ProPrice,ProImages,ProImages1,ProImages2,ProImages3,ProImages4,ProImages5,ProImages6) values('$name','$desc','$price','$img_name','$img_name1','$img_name2','$img_name3','$img_name4','$img_name5','$img_name6')";
        $result = $db->exec($query);
        return $result;
    }
    public function updatePro($id,$name,$desc,$price,$img,$img1,$img2,$img3,$img4,$img5,$img6){
        $db = new connect();
        $query = "update `products` set ProName = '$name',ProDesc = '$desc',ProPrice='$price',ProImages='$img',ProImages1='$img1',ProImages2='$img2',ProImages3='$img3',ProImages4='$img4',ProImages5='$img5',ProImages6='$img6' where ProID='$id'";
        $result = $db->exec($query);
        return $result;
    }
    public function delPro($id){
        $db = new connect();
        $query = "delete from products where ProID='$id'";
        $result = $db->exec($query);
        return $result;
        
    }
    public function getProductById($id){
        $db = new connect();
        $select = "select * from products where ProId = '$id'";
        return $db->getInstance($select);
    }
     public function countTotalRecord(){
        $db = new connect();
        $select = "COUNT(select * from products)";
        return $db->getList($select);
    }
    public function hihi($page,$baitren_mottrang){
        $db = new connect();
        $select = "SELECT * FROM `products`ORDER BY `ProId` DESC  LIMIT {$page}*{$baitren_mottrang},{$baitren_mottrang}" ;
        return $db->getList($select);
    }
    
}
