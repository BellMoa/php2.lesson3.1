<?php


class NewsController
{

    public function actionAll(){
        $items = News::getALL();
        include __DIR__ . '/../view/news/all.php';
}

    public function actionOne(){

        $id = $_GET['id'];
        $items = News::getOne($id);
        include __DIR__ . '/../view/news/one.php';

    }
}