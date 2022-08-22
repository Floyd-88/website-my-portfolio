<?php
require_once('Connection.php');
$db = new Connection();
$count = $db->count_views($_GET['id']);

//count_views($_GET['id']);

$arr = $db->get_all_news();
$link = $arr[$_GET['id'] - 1]["link_news"];
header("Location: $link");
?>