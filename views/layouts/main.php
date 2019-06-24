<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\Breadcrumbs;
use yii\widgets\ActiveForm;
use app\models\SearchForm;
$model= new SearchForm;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">

	<?php $this->registerCsrfMetaTags() ?>
	<?php $this->head() ?>

    <title>Go Cafe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <div class="container">
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
		<? //= Alert::widget() ?>
		<?= $content ?>
    </div>
</div>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container px-md-5">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Category</h2>
                    <ul class="list-unstyled categories">
                        <li><a href="#">Bar <span>(6)</span></a></li>
                        <li><a href="#">Restaurant <span>(8)</span></a></li>
                        <li><a href="#">Cafe <span>(2)</span></a></li>
                        <li><a href="#">Stolovaya <span>(2)</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Archives</h2>
                    <ul class="list-unstyled categories">
                        <li><a href="#">November 2018 <span>(105)</span></a></li>
                        <li><a href="#">October 2018 <span>(212)</span></a></li>
                        <li><a href="#">September 2018 <span>(150)</span></a></li>
                        <li><a href="#">August 2018 <span>(100)</span></a></li>
                        <li><a href="#">July 2018 <span>(200)</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script>
                    <i class="icon-heart" aria-hidden="true"></i>
                </p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
