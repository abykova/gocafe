<?php
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\SearchForm;
$model_1= new SearchForm();

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
                    <?php $form=ActiveForm::begin(); ?>
                        <li>
                            <div class="row">
                                <?= $form->field($model_1,'q')->label('')->textInput([
                                    'class'=>'input input_search',
                                    'placeholder'=>'заведение'
                                ]) ?>
                                <!-- <input style="width: 80%;" placeholder="заведение"  name="q" type='text'> -->
                                <button type="submit"  class=" btn-search ">Найти</button>
                            </div>
                        </li>
                    <?php ActiveForm::end(); ?>
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


			<h1>Популярные заведения </h1>

            <div class="photograhy">
                <div class="row no-gutters">
                    <?php if(!empty($cafes)): ?>
                        <?php foreach ($cafes as $cafe): ?>
                            <div class="col-md-4 ftco-animate">
                                <div 
                                   class="photography-entry img  d-flex justify-content-center align-items-center"
                                   style="background-image: url(images/<?= $cafe->img ?>);">
                                    <div class="overlay"></div>
                                    <div class="text text-center">
                                        <h3><a href="<?= Url::to(['site/view','id'=>$cafe->id_cafe]) ?>"><?= $cafe->name ?></a></h3>
                                        <span class="tag"><?= $cafe->kitchen?></span><br>
                                        <span class="tag">
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

                                                <?php Modal::end(); ?>
                                        </span><br>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>К сожеланию, популярных пока нет</p>
                    <?php endif; ?>
                    
                    
                </div>
                <?php
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
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