<?php
    $na_sql = "SELECT `member`.`name` FROM `chat` JOIN member on `chat`.`author`=`member`.`sid` WHERE `sid_title`=1";  //合併chat跟member表單取出name
    $a_sql = "SELECT `member`.`name` FROM `chat` JOIN member on `chat`.`author`=`member`.`sid`"; //合併chat跟member表單 
    $totalname = $pdo->query($a_sql)->fetchAll();

    $author = json_encode($totalname, JSON_UNESCAPED_UNICODE);
    $var = 1;
    
?>