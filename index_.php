<!-- 我增加了一個parts資料夾 -->
<?php require __DIR__ . '/parts/conect_db.php'; ?>

<!-- 我增加了一個parts資料夾 -->
<?php require __DIR__ . '/parts/head_css.php'; ?>
<!-- 我增加了一個parts資料夾 -->
<?php require __DIR__ . '/parts/body_nav.php'; ?>
<!-- 用body_self來執行php的切換 -->
<div>
    <p>HOME</p>
</div>


<?php 
    if($_GET['nav']=='login'){
        require __DIR__ . '/login_system/login.php';
    }
?>
<!-- 我增加了一個footer.php -->
<?php require __DIR__ . '/parts/footer.php'; ?>

