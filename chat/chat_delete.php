<?php 
// require './admin-required.php';  //之後再處理
require '../parts/conect_db.php'; 




$chat = isset($_GET['chat']) ? intval($_GET['chat']) : 0;

$sql = "DELETE FROM chat WHERE author=$chat";

$pdo->query($sql);

$come_from = 'Chat_index.php';
//轉跳頁面用
if(! empty($_SERVER['HTTP_REFERER'])){
    $come_from = $_SERVER['HTTP_REFERER'];
}
header("Location: {$come_from}");
