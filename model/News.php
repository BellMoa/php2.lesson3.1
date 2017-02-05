<?php
require_once  __DIR__ . '/../classes/DB.php';
class News
{

    public static function  getALL(){
        $db = new DB();
        $sql = "SELECT * FROM news";
        return $db->getAll($sql);

    }
}