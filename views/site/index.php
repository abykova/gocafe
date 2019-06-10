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

            

            <div class="photograhy">
                <div class="row no-gutters">
                    <?php
                Modal::begin([
                    'toggleButton' => [
                        'label'=>'',
                        'style' => 'background-image: url(images/image_1.jpg)',
                        'class' => 'modalclass photography-entry img col-md-4  d-flex justify-content-center align-items-center',
                        ],
                    ]);
                ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'applicationForm']]); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'tell') ?>
                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

            <?php Modal::end(); ?>
            <?php
                Modal::begin([
                    'toggleButton' => [
                        'label'=>'',
                        'style' => 'background-image: url(images/image_2.jpg)',
                        'class' => 'modalclass photography-entry img col-md-4  d-flex justify-content-center align-items-center',
                        ],
                    ]);
                ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'applicationForm']]); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'tell') ?>
                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

            <?php Modal::end(); ?>
            <?php
                Modal::begin([
                    'toggleButton' => [
                        'label'=>'',
                        'style' => 'background-image: url(images/image_3.jpg)',
                        'class' => 'modalclass photography-entry img col-md-4  d-flex justify-content-center align-items-center',
                        ],
                    ]);
                ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'applicationForm']]); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'tell') ?>
                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

            <?php Modal::end(); ?>
            <?php
                Modal::begin([
                    'toggleButton' => [
                        'label'=>'',
                        'style' => 'background-image: url(images/image_4.jpg)',
                        'class' => 'modalclass photography-entry img col-md-4  d-flex justify-content-center align-items-center',
                        ],
                    ]);
                ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'applicationForm']]); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'tell') ?>
                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

            <?php Modal::end(); ?>
            <?php
                Modal::begin([
                    'toggleButton' => [
                        'label'=>'',
                        'style' => 'background-image: url(images/image_5.jpg)',
                        'class' => 'modalclass photography-entry img col-md-4  d-flex justify-content-center align-items-center',
                        ],
                    ]);
                ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'applicationForm']]); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'tell') ?>
                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

            <?php Modal::end(); ?>
            <?php
                Modal::begin([
                    'toggleButton' => [
                        'label'=>'',
                        'style' => 'background-image: url(images/image_6.jpg)',
                        'class' => 'modalclass photography-entry img col-md-4  d-flex justify-content-center align-items-center',
                        ],
                    ]);
                ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'applicationForm']]); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'tell') ?>
                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

            <?php Modal::end(); ?>
            <?php
                Modal::begin([
                    'toggleButton' => [
                        'label'=>'',
                        'style' => 'background-image: url(images/image_7.jpg)',
                        'class' => 'modalclass photography-entry img col-md-4  d-flex justify-content-center align-items-center',
                        ],
                    ]);
                ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'applicationForm']]); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'tell') ?>
                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

            <?php Modal::end(); ?>
            <?php
                Modal::begin([
                    'toggleButton' => [
                        'label'=>'',
                        'style' => 'background-image: url(images/image_8.jpg)',
                        'class' => 'modalclass photography-entry img col-md-4  d-flex justify-content-center align-items-center',
                        ],
                    ]);
                ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'applicationForm']]); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'tell') ?>
                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

            <?php Modal::end(); ?>
            <?php
                Modal::begin([
                    'toggleButton' => [
                        'label'=>'',
                        'style' => 'background-image: url(images/image_9.jpg)',
                        'class' => 'modalclass photography-entry img col-md-4  d-flex justify-content-center align-items-center',
                        ],
                    ]);
                ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'applicationForm']]); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'tell') ?>
                        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

            <?php Modal::end(); ?>
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