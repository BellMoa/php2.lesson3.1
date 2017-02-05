<?php

class DB
{

    private function connectToDB(){
        return mysqli_connect('localhost','root','','test');
    }

    public function querry($sql, $class ='stdClass'){
        $resource = $this->connectToDB();
        $result = mysqli_query($resource,$sql);

            if(false == $result){
                return false;
        }

        $tmp = [];

             while($row = mysqli_fetch_object($result,$class)){
            $tmp[] = $row;
             }

        return $tmp;
    }
}