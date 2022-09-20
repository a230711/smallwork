<div class="row">
    <div class="col">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">標題</th>
                    <th scope="col">內容</th>
                    <th scope="col">發文時間</th>
                    <th scope="col">作者</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $r) : ?>
                    <tr>
                        <td><?= htmlentities($r['title']) ?></td>
                        <td><?= htmlentities($r['content']) ?></td>
                        <td><?= $r['time'] ?></td>
                        <td><?= $r['name'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>