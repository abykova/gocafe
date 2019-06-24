<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<body>
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <h1 id="colorlib-logo"><?= Html::a('<span class="flaticon-camera"></span>Go Cafe', ['site/index']) ?>
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li class="colorlib-active"><?= Html::a('Home', ['site/index']) ?></li>
                    <li><?= Html::a('About', ['site/about']) ?></li>
                    <li><?= Html::a('Contact', ['site/contact']) ?></li>
                    <form action="" method="get">
                        <li>
                            <input style="width: 80%;" placeholder="заведение"  name="q" type='text'>
                            <button type="submit"  class="btn  ">Найти</button>
                        </li>
                    </form>
                </ul>
                <ul class="tagcloud">
                    <a href="<?= Url::to(['kitchens/list']) ?>" class="tag-cloud-link">кухня</a>
                    <a href="<?= Url::to(['parametr/hit']) ?>" class="tag-cloud-link">популярные</a>
                    <a href="<?= Url::to(['parametr/new']) ?>" class="tag-cloud-link">новинки</a>
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
            <h1>Кухни </h1>
			<?php foreach ($kitchens as $kitchen):?>
				<div class="row">
					<ul class="list-group" class="col-md-4">
						<li class="list-group-item" style="width: 200px;"><a href="<?= Url::to(['kitchens/kitchen', 'kitchen'=>$kitchen->kitchen]) ?>"><?= $kitchen->kitchen ?></a></li>
					</ul>
				</div>
				
			<?php endforeach; ?>
        </section>

    </div>
</div>

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


</body>