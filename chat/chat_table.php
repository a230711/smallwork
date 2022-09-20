<?php require './Buy-api.php' ?>
<div>
    
    <ul>
        <?php foreach ($rows as $r) : ?>
        <li>
            <h2><?= htmlentities($r['title']) ?></h2>
            <p><?= htmlentities($r['content']) ?></p>
            <h3><?= $r['time'] ?></h3>
            <p><?= $r['name'] ?></p>
            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                回覆
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <input type="text">
                    <button>確定</button>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    
</div>
<div class="row">
    <div class="col">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">
                        刪除
                    </th>
                    <th scope="col">標題</th>
                    <th scope="col">內容</th>
                    <th scope="col">發文時間</th>
                    <th scope="col">作者</th>
                    <th scope="col">回覆</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $r) : ?>
                    <tr>
                        <td>
                            <a href="javascript: delete_it(<?= $r['chat'] ?>)">
                                刪除
                            </a>
                        </td>
                        <td><?= htmlentities($r['title']) ?></td>
                        <td><?= htmlentities($r['content']) ?></td>
                        <td><?= $r['time'] ?></td>
                        <td><?= $r['name'] ?></td>
                        <td>
                            <a href="?author=<?= $r['author'] ?>">
                                回覆
                            </a>
                            <!-- 想用在同一層做新增暫時等一下，還要處理按下轉跳問題 -->
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>