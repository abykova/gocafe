<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\Breadcrumbs;

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
        		<div id="colorlib-page">
                    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
                        <h1 id="colorlib-logo"><?= Html::a('<span class="flaticon-camera"></span>Go Cafe', ['site/index']) ?>
                            <nav id="colorlib-main-menu" role="navigation">
                                <ul>
                                    <li class="colorlib-active"><?= Html::a('Home', ['site/index']) ?></li>
                                    <li><?= Html::a('About', ['site/about']) ?></li>
                                    <li><?= Html::a('Contact', ['site/contact']) ?></li>
                                    <li><input placeholder="заведение" type='text'></li>
                                    <li><input placeholder="время работы"></li>
                                    <li><input placeholder="кухня"></li>
                                </ul>
                                <ul class="tagcloud">
                                    <a href="#" class="tag-cloud-link">кухня</a>
                                    <a href="#" class="tag-cloud-link">время</a>
                                    <a href="#" class="tag-cloud-link">праздник</a>
                                    <a href="#" class="tag-cloud-link">акции</a>
                                    <a href="#" class="tag-cloud-link">суши</a>
                                    <a href="#" class="tag-cloud-link">leaves</a>
                                    <a href="#" class="tag-cloud-link">food</a>

                                </ul>
                            </nav>

                            <div class="colorlib-footer">
                                <h3>Follow Us Here!</h3>
                                <div class="d-flex justify-content-center">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i
                                                        class="icon-facebook"></i></a></li>
                                        <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i
                                                        class="icon-twitter"></i></a></li>
                                        <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i
                                                        class="ifigurefigurefigurcon-instagram"></i></a></li>
                                        <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i
                                                        class="icon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                    </aside>
                    <div id="colorlib-main">
                        <section class="ftco-section-2">

                            <?= $content ?>
                            
                        </section>

                    </div>
                </div>

                

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
