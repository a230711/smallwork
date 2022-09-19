
<!-- 我增加了一個parts資料夾 -->
<?php require '../parts/conect_db.php'; ?>

<!-- 我增加了一個parts資料夾 -->
<?php require '../parts/head_css.php'; ?>
<!-- 我增加了一個parts資料夾 -->
<?php require '../parts/body_nav.php'; ?>

<form name="form01" onsubmit="checkForm();return false" enctype="multipart/form-data">
    <fieldset>

        <legend>會員登入</legend>

        <div class="st">
            <label for="" class="title">帳號</label>
            <input type="text" name="account" placeholder="請輸入帳號" maxlength="15">
        </div>

        <div class="st">
            <label for="" class="title">密碼</label>
            <input type="password" name="password" placeholder="請輸入密碼" maxlength="15">
        </div>
        <div class="st btn">
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>


    </fieldset>
</form>
<script>
    async function checkForm() {
        const FD = new FormData(document.form01);
        // console.log(FD);
        //送給誰,物件

        //application/x-www-form-urlencoded
        const res = await fetch('login_api.php', {
            method: 'POST',
            body: FD,
        })
        const obj = await res.json();
        if (obj.success) {
            // location.href = location.href;
            location.href = "../index_.php";
        } else {
            alert(obj.error);
        }
    }
</script>

<!-- 我增加了一個footer.php -->
<?php require '../parts/footer.php'; ?>







