<?php
include_once __DIR__."/../src/functions.php";
include_once __DIR__."/../src/db.php";

$url = $_SERVER['REQUEST_URI'];

if ($url == '/') {
    include_once __DIR__."/../src/pages/blog.php";
}

if (strpos($url, '/page/') === 0) {
    $tmp = explode(separator: '/', string: $url);
    $pageId = $tmp[count($tmp) -1];
    include_once __DIR__."/../src/pages/page.php";
}