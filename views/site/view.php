<?php
use yii\bootstrap\Modal;
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
                    <form action="<?= Url::to(['site/about']) ?>" method="get">
                        <li>
                            <input style="width: 80%;" placeholder="заведение"  name="q" type='text'>
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
        <section class="ftco-section-2 view">

				<h1 class="view__title "><?= $cafe->name ?></h1>
			

            
                <div class="row">
                    <div class="col-md-8">
                    	<img style="height: 300px;" src="images/<?= $cafe->img?>" alt="$cafe->name">
                    </div>
                    <div class="col-md-4">
                    	<h2 >О кафе: </h2>
                    	<table class="table ">
                    		<tr>
                    			<th class="coll">
                    				Название:
                    			</th>
                    			<th>
                    				<?= $cafe->name ?>
                    			</th>
                    		</tr>
                    		<tr>
                    			<th class="coll">
                    				Кухня:
                    			</th>
                    			<th>
                    				<?= $cafe->kitchen ?>
                    			</th>
                    		</tr>
                    		<tr>
                    			<th class="coll">
                    				Средний чек:
                    			</th>
                    			<th>
                    				<?= $cafe->evarage_check ?> тг
                    			</th>
                    		</tr>
                    		<tr>
                    			<th class="coll">
                    				Время работы:
                    			</th>
                    			<th>
                    				<?= $cafe->working_hours ?>
                    			</th>
                    		</tr>
                    		<tr>
                    			<th class="coll">
                    				Адрес:
                    			</th>
                    			<th>
                    				<?= $cafe->address ?>
                    			</th>
                    		</tr>
                    		<tr>
                    			<th class="coll">
                    				Телефон: 
                    			</th>
                    			<th>
                    				<?= $cafe->tell ?>
                    			</th>
                    		</tr>
                    		
                    	</table>
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
                    	
                    </div>
				</div>
				<div>
					<h3>Описание</h3>
					<p>
						<?= $cafe->content ?>
					</p>
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