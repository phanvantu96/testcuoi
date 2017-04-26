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
class users {
    //put your code here
    var $UserId = null;
    var $UserName = null;
    var $Email =  null;
    var $Role = null;
    var $PassWord = null;
    
    
    public function getListUser(){
        $db = new connect();
        $select = "select * from users";
        $result = $db->getList($select);
        return $result;
    }
    public function getListById($id){
        $db = new connect();
        $select = "select * from users where UserId = '$id'";
        $result = $db->getList($select);
        return $result;
    }
    public function insertUser($user,$email,$pass){
        $db= new connect();
        $query = "insert into users (UserName,Email,PassWord) values ('$user','$email','$pass')";
        return $db->exec($query);
    }

    public function updateUser($id,$user,$email,$pass,$role){
        $db = new connect();
        $query = "UPDATE `users` SET UserName = '$user',Email = '$email',PassWord='$pass', Role = '$role' where UserId='$id'";
        $result = $db->exec($query);
        return $result;
    }
    public function delUser($id){
        $db = new connect();
        $query = "DELETE FROM `users` WHERE UserId='$id'";
        $result = $db->exec($query);
        return $result;
        
    }
     public function insertAdmin($user,$email,$pass){
        $db= new connect();
        $query = "insert into users (UserName,Email,PassWord,Role) values ('$user','$email','$pass','1')";
        return $db->exec($query);
    }
    public function getPass($user){
        $db = new connect();
        $select = "select PassWord, UserId from users where UserName = '$user'";
        return $db->getInstance($select);
    }
    public function getRole ($user){
        $db = new connect();
        $select = "select Role from users where UserName = '$user'";
        return $db->getInstance($select);
    }
}
