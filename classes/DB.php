<?php

class DB
{

    private function connectToDB(){
        return mysqli_connect('localhost','root','','test');
    }

    public function getAll($sql){
        $resource = $this->connectToDB();
        $result = mysqli_query($resource,$sql);

            if(false == $result){
                return false;
        }

        $tmp = [];

             while($row = mysqli_fetch_object($result)){
            $tmp[] = $row;
             }

        return $tmp;
    }
}