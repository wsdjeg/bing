<?php

/**
* CopyRight Bitmoe · eary
* Link https://api.ioliu.cn 
* Follow https://github.com/eary/bing
*/
class DBHelper{
    
    public function DBHelper(){}
    
    private static function getConn(){
        $conn = mysqli_connect("qdm16395144.my3w.com","qdm16395144","abc123456","qdm16395144_db");
        mysqli_query($conn,"SET NAMES utf8");
        return $conn;
    }
    
    public static function opearting($sql){
        return mysqli_query(self::getConn(),$sql);
    }
}

?>