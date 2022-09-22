<?php require './Buy-api.php' ?>
<?php 
    $ta_sql = "SELECT `chat`,`content`,`member`.`name`,`time`,`reply_sid` FROM `chat` JOIN `member` on `chat`.`author`=`member`.`sid` WHERE `reply_sid` ORDER BY `time` DESC";
    $rows2 = [];

    $rows2 = $pdo->query($ta_sql)->fetchAll();

    // echo json_encode($rows2, JSON_UNESCAPED_UNICODE);
?>

<div class="row">
    <div class="col">
    <?php foreach ($rows as $r) : ?>
        <div class="accordion" id="accordionExample">
            
            <div class="accordion-item">                     
                <h2 class="accordion-header" id="heading<?=$r['chat']?>"> 
                    <!-- 原本的?page=1怎麼被取代 -->               
                    <button class="accordion-button" type="button" data-bs-toggle='collapse' data-bs-target="#collapse<?=$r['chat']?>" aria-expanded="true" aria-controls="collapse<?=$r['chat']?>">
                        <?= $r['name'] ?><?=$r['chat']?><?= htmlentities($r['title']) ?>
                    </button>               
                </h2>               
                <div id="collapse<?=$r['chat']?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$r['chat']?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?= htmlentities($r['content']) ?>
                        <br>
                        <?= $r['name'] ?><?= $r['time'] ?>
                        <br>
                        <form name="form1" class="row g-3" id="form<?=$r['chat']?>">
                            <div class="col-sm-10">
                                <textarea name="content" class="form-control talk" placeholder="留言" id="floatingTextarea content"></textarea>
                                <input type="radio" name="reply_sid" id="reply_sid" value="<?=$r['chat']?>" checked/>回覆:<?= $r['name'] ?>
                                <input type="radio" name="author" id="author" value="<?= $_SESSION['user']['sid'] ?>" checked/>作者:<?= $_SESSION['user']['nickname'] ?>
                            </div>
                            <div class="col-sm">
                                <button onclick="checkForm(<?=$r['chat']?>)"; return false;' class="btn btn-primary">確認</button>
                                <a href="javascript: delete_it(<?= $r['chat'] ?>)" class="btn btn-primary">刪除</a>
                            </div>
                        </form>
                        <?php foreach ($rows2 as $ch) : 
                            if($r['chat']==$ch['reply_sid']):
                        ?>
                            <div class="alert alert-info" role="alert">
                                <?= $ch['content'] ?>
                                <?= $ch['name'] ?>
                                <?= $ch['time'] ?>
                            </div>
                        <?php endif;
                            endforeach; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <script>

            
            function checkForm(sid){
                // document.form1.email.value
                let FM = document.querySelector(`#form${sid}`);
                const fd = new FormData(FM);

                // for(let k of fd.keys()){
                //     console.log(`${k}: ${fd.get(k)}`);
                // }
                // TODO: 檢查欄位資料

                fetch('insert-api.php', {
                    method: 'POST',
                    body: fd
                })
                .then(r=>r.json())
                .then(obj=>{
                    console.log(obj);
                    if(! obj.success){
                        alert(obj.error);
                    } else {
                        alert('謝謝留言')
                        // location.href = 'list.php';
                    }
                })
            }
        </script>

    <?php endforeach; ?>
    </div>
</div>
