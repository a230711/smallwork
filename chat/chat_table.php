<?php require './Buy-api.php' ?>
<div>
    

    <ul>
        <?php for($k=0;$k<=$var;$k++): ?>
        <li>
            <h1></h1>
            <p><?= $author ?></p>
            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    回覆
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">

                </div>
            </div>
        </li>
        <?php endfor; ?>
    </ul>
    
</div>
