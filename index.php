<?php
require_once  __DIR__ . '/model/News.php';
require_once  __DIR__ . '/classes/DB.php';

$news = new News();
$items = $news->getALL();
//var_dump($items);

include  __DIR__ . '/view/index.php';