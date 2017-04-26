<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connect
 *
 * @author MINHDUC
 */
class connect {
    var $db = null;
    
   public function __construct() {
                $dns = 'mysql:host=localhost;dbname=shoeshop';
                $user ='root';
                $pass = '';
                $this->db = new PDO($dns,$user,$pass);
            }
    public function getList($select){
        $result = $this->db->query($select);
        return $result;
    }
    public function getInstance($select){
        $result = $this->db->query($select);        
        $results = $result->fetch();
        return $results;
    }
    public function exec($query){
        $result = $this->db->exec($query);
        return $result;
    }
}

