<?php
require_once  __DIR__ . '/model/News.php';

$items = News::getALL();

//var_dump($items);
include  __DIR__ . '/view/index.php';