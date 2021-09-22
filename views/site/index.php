<?php

/* @var $this yii\web\View */
/* @var $authors app\models\Author */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <?php foreach ($authors as $author): ?>
            <div class="card mb-3" style="width: 18rem;">
                <div class="card-header">
                    <?php echo $author->name ?>
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($author->books as $book): ?>
                        <li class="list-group-item"><?php echo $book->title ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endforeach ?>
    </div>
</div>
</div>
