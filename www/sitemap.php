<?
header("Content-type: text/xml");
echo file_get_contents('https://' . $_SERVER['HTTP_HOST'] . '/sitemap/');