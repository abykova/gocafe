<?php
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
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
                    <form action="<?= \yii\helpers\Url::to('index/search') ?>" method="get">
                        <li>
                            <input style="width: 80%;" placeholder="заведение"  name="name_cafe" type='text'>
                            <button type="submit"  class="btn  ">Найти</button>
                        </li>
                    </form>
                </ul>
                <ul class="tagcloud">
                    <a href="#" class="tag-cloud-link">кухня</a>
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


			

            <div class="photograhy">
                <h1>You're looking for <?= Html::encode($name_cafe)?></h1>
                <div class="row no-gutters">
                    <?php foreach ($cafes as $cafe): ?>
                        <div class="col-md-4 ftco-animate">
                            <div 
                               class="photography-entry img  d-flex justify-content-center align-items-center"
                               style="background-image: url(images/<?= $cafe->img ?>);">
                                <div class="overlay"></div>
                                <div class="text text-center">
                                    <h3><?= $cafe->name ?></h3>
                                    <span class="tag"><?= $cafe->kitchen?></span><br>
                                    <span class="tag">
                                        <?php
                                            Modal::begin([
                                                'toggleButton' => [
                                                    'header' => '<h2>Оставить заявку на бронь</h2>',
                                                    'label' => 'Оставить заявку',
                                                    'class' => 'btn btn-success'
                                                    ],
                                                ]);
                                            ?>

                                                <div class="application-form">

                                                    <?php $form = ActiveForm::begin(); ?>

                                                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                                                        <?= $form->field($model, 'tell')->textInput(['maxlength' => true]) ?>

                                                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                                                        <div class="form-group">
                                                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
                                                        </div>

                                                    <?php ActiveForm::end(); ?>

                                                </div>

                                            <?php Modal::end(); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php
                                            Modal::begin([
                                                'toggleButton' => [
                                                    'label' => 'Оставить заявку',
                                                    'class' => 'btn btn-success'
                                                    ],
                                                ]);
                                            ?>

                                                <div class="application-form">

                                                    <?php $form = ActiveForm::begin(); ?>

                                                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                                                        <?= $form->field($model, 'tell')->textInput(['maxlength' => true]) ?>

                                                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                                                        <div class="form-group">
                                                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
                                                        </div>

                                                    <?php ActiveForm::end(); ?>

                                                </div>

                    
                    
                </div>
            </div>
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