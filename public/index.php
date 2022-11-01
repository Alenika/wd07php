<?php
include_once __DIR__."/../src/functions.php";
include_once __DIR__."/../src/db.php";

    $url = $_SERVER['REQUEST_URI'];

    $url = explode('?', $url);
    $url = $url[0];
    //debug($url);
    //die();

    if ($url == '/') {
        include_once __DIR__."/../src/pages/blog.php";
    } elseif ($url == '/add_post_form') {
        include_once __DIR__."/../src/pages/add_post.php";
    } elseif ($url == '/edit_post') {
        include_once __DIR__."/../src/pages/edit_post.php";
    } elseif (strpos($url, '/page/') === 0) {
        $tmp = explode(separator: '/', string: $url);
        $pageId = $tmp[count($tmp) -1];
        include_once __DIR__."/../src/pages/page.php";
    }

