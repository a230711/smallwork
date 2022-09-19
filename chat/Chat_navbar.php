<div class="nav">

    <ul>
        <li>
            <a href='#'>論壇</a>
        </li>
    </ul>

    <?php if (empty($_SESSION['user'])) : ?>
        <!-- 轉到login_system資料夾中的login.php -->
        <div class="LOGIN"><a href="../login_system/login.php">登入</a></div>  

        <div class="LOGOUT"><a class="nav-link" href="#">註冊</a></div>

    <?php else : ?>

        <div class="LOGIN"><?= $_SESSION['user']['nickname'] ?></a></div>


        <div class="LOGOUT"><a class="nav-link" href="./login_system/logout.php">登出</a></div>

    <?php endif; ?>


    

</div>

</script>