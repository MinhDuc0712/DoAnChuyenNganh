<?php

require "../app/core/init.php";

$url = $_GET['url'] ?? 'home';
$url = explode('/', $url);

$pages_name = trim($url[0]);
$filename = '../app/pages/'.$pages_name.'.php';

if (file_exists($filename)) {
    require_once $filename;
}
else {
    require_once '../app/pages/404.php';
}
