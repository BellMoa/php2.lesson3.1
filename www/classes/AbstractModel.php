<?php

abstract class AbstractModel
{

    protected static $table;
    protected static $class;

    public static function  getALL(){
        $db = new DB();
        $sql = 'SELECT * FROM '.static::$table;
        return $db->querryAll($sql,static::$class);

    }
    public static function  getOne($id){
        $db = new DB();
        $sql = ' SELECT * FROM '.static::$table.' WHERE  id = '.$id;
        return $db->querryOne($sql,static::$class);
    }
}