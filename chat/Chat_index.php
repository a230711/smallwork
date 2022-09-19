<?php require '../parts/conect_db.php';
    $pagePer = 5;  //
    $page = 3;
    $totalPages = 10;

    $a_sql = "SELECT * FROM `chat` JOIN member on `chat`.`author`=`member`.`sid`";  //合併chat跟member表單
    $li_sql = "SELECT COUNT(`sid_title`) FROM `chat`";  //列表發表總數
    $a_sql = "SELECT * FROM `chat` JOIN member on `chat`.`author`=`member`.`sid`";
    
?>
<?php require '../parts/head_css.php' ?>
<?php require '../parts/body_nav.php' ?>
<div class="container">
    <div class="row">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <?php for($i=$page-5;$i<= $page + 5; $i++):
                    if($i>=1 and $i <= $totalPages):
                ?>
                    <li class="page-item">
                        <a class="page-link" href="page=<?=$i?>">
                            <?=$i?>
                        </a>
                    </li>
                <?php endif;
                    endfor;
                ?>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    <?php
    //知道無法執行
        if(empty($_SESSION['admin'])){
            include '/chat_no_login.php';
        }else{
            include '/chat_no_login.php';
        }
    ?>
</div>
<?php require '../parts/footer.php' ?>