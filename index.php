<?php
require_once  __DIR__ . '/model/News.php';
require_once  __DIR__ . '/classes/DB.php';


$items = News::getALL();


include  __DIR__ . '/view/index.php';