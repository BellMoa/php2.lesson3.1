<?php
require_once  __DIR__ . '/model/News.php';

$items = News::getALL();

include  __DIR__ . '/view/index.php';